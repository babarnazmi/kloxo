<?php

// release on Kloxo 6.1.7
// by mustafa.ramadhan@lxcenter.org

include_once "lib/html/include.php";

// initProgram('admin');

$list = parse_opt($argv);

$engine = ($list['engine']) ? $list['engine'] : 'MyISAM';
$database = (isset($list['database'])) ? $list['database'] : null;
$table = (isset($list['table'])) ? $list['table'] : null;
$config = (isset($list['config'])) ? $list['config'] : null;
$utf8 = (isset($list['utf8'])) ? $list['utf8'] : null;

setMysqlConvert($engine, $database, $table, $config, $utf8);

/* ****** BEGIN - setMysqlConvert ***** */

/* move from mysql-convert.php */

function setMysqlConvert($engine, $database, $table, $config, $utf8)
{
	global $gbl, $sgbl, $login, $ghtml;

	log_cleanup("Convert of MySQL engine");

	$engine = strtolower($engine);

	$database = ($database) ? $database : '_all_';
	$table = ($table) ? $table : '_all_';
	$config = ($config) ? $config : 'yes';
	$utf8 = ($utf8) ? $utf8 : 'no';

	$pass = slave_get_db_pass();

	//--- the first - to 'disable' skip- and restart mysql
	system("sed -i 's/skip/\;###123###skip/g' /etc/my.cnf");

	if (file_exists("/etc/init.d/mysql")) {
		exec("service mysql restart");
	} else {
		exec("service mysqld restart");
	}

	$conn = new mysqli('localhost', 'root', $pass);

	$conn->select_db('mysql');

	log_cleanup("- Converting to {$engine} engine");

	try {
		if ($database === '_all_') {

			$dbs = $conn->query('SHOW databases');

			while ($db = $dbs->fetch_array(MYSQLI_NUM)) {
				log_cleanup("-- '{$db[0]}' database to '{$engine}' storage-engine");

				$conn->select_db($db[0]);

				if ($utf8 === 'yes') {
					log_cleanup("-- '{$db[0]}' database to 'utf-8' charset");
					$conn->query("ALTER DATABASE {$db[0]} DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
				}

				if ($table === '_all_') {
					$tbls = $conn->query('SHOW tables');

					while ($tbl = $tbls->fetch_array(MYSQLI_NUM)) {
						log_cleanup("--- '{$tbl[0]}' table to '{$engine}' storage-engine");

						$conn->query("ALTER TABLE {$tbl[0]} ENGINE={$engine}");

						if ($utf8 === 'yes') {
							log_cleanup("--- '{$tbl[0]}' table to 'utf-8' charset");
							$conn->query("ALTER TABLE {$tbl[0]} DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
						}
					}
				} else {
					log_cleanup("--- '{$table}' table to '{$engine}' storage-engine");

					$conn->query("ALTER TABLE {$table} ENGINE ={$engine}");

					if ($utf8 === 'yes') {
						log_cleanup("--- '{$table}' table to 'utf-8' charset");
						$conn->query("ALTER TABLE {$table} DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
					}
				}
			}
		} else {
			$conn->select_db($database);

			log_cleanup("-- '{$database}' database to '{$engine}' storage-engine");

			if ($table === '_all_') {
				$tbls = $conn->query('show tables');

				while ($tbl = $tbls->fetch_array(MYSQLI_NUM)) {
					log_cleanup("--- '{$tbl[0]}' table to '{$engine}' storage-engine");

					$conn->query("ALTER TABLE {$tbl[0]} ENGINE={$engine}");

					if ($utf8 === 'yes') {
						log_cleanup("--- '{$tbl[0]}' table to 'utf-8' charset");
						$conn->query("ALTER TABLE {$tbl[0]} DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
					}
				}
			} else {
				log_cleanup("--- '{$table}' table to '{$engine}' storage-engine");

				$conn->query("ALTER TABLE {$table} ENGINE={$engine}");

				if ($utf8 === 'yes') {
					log_cleanup("--- '{$table}' table to 'utf-8' charset");
					$conn->query("ALTER TABLE '{$table}' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
				}
			}
		}
	} catch	(Exception $e) {
		echo 'Message: ' . $e->getMessage();
	}

	//--- the second - back to 'original' config and restart mysql
	system("sed -i 's/\;###123###skip/skip/g' /etc/my.cnf");

	if (file_exists("/etc/init.d/mysql")) {
		exec("service mysql restart");
	} else {
		exec("service mysqld restart");
	}

	if ($config === 'yes') {
		if ($database === '_all_') {
			if (file_exists("/etc/my.cnf.d/my.cnf")) {
				$mycnf = "/etc/my.cnf.d/my.cnf";
			} else {
				$mycnf = "/etc/my.cnf";
			}

			$string = file_get_contents($mycnf);

			$string_array = explode("\n", $string);

			$string_collect = null;

			foreach ($string_array as $sa) {
				if (stristr($sa, 'skip-innodb') !== false) {
					$string_collect .= "";
					continue;
				}

				if (stristr($sa, 'default-storage-engine') !== false) {
					$string_collect .= "";
					continue;
				}

				$string_collect .= $sa . "\n";
			}

			if ($engine === 'myisam') {
				$string_source = "[mysqld]\n";
				$string_replace = "[mysqld]\nskip-innodb\ndefault-storage-engine={$engine}\n";
				log_cleanup(" - Added 'skip-innodb' and 'default-storage-engine={$engine}' in '{$mycnf}'");
			} else {
				$string_source = "[mysqld]\n";
				$string_replace = "[mysqld]\n#skip-innodb\ndefault-storage-engine={$engine}\n";
				log_cleanup("- Added 'default-storage-engine={$engine}' in '{$mycnf}'");
			}

			$string_collect = str_replace($string_source, $string_replace, $string_collect);

			file_put_contents($mycnf, $string_collect);
		}
	}

	log_cleanup("- Convert of MySQL to '{$engine}' engine finished");

	log_cleanup("- MySQL Service restarted");

	if (file_exists("/etc/init.d/mysql")) {
		exec("service mysql restart");
	} else {
		exec("service mysqld restart");
	}
}

/* ****** END - setMysqlConvert ***** */
