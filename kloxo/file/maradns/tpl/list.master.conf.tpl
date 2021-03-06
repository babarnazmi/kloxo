<?php
	$path = "/home/maradns/conf/master";
	$dirs = glob("{$path}/*");

	$str = '';

	foreach ($dirs as $d) {
		$d = str_replace("{$path}/", "", $d);
		$zone = "csv2[\"{$d}.\"] = \"{$d}\"\n";
		$str .= $zone;
	}

	$file = "/etc/mararc";

	$srctxt = file_get_contents($file);

	$startin = "### begin - zone - do not remove/modify this line\n";
	$endin = "### end - zone - do not remove/modify this line";

	// MR -- calling function in lib.php
	$content = replace_between($srctxt, $startin, $endin, $str);

	file_put_contents($file, $content);

	if ($action === 'fix') {
		if (array_keys($domains)) {
			exec_with_all_closed("/etc/init.d/maradns reload");

			foreach ($domains as $k => $v) {
				exec_with_all_closed("sh /script/dnsnotify {$v}");
			}
		}
	} elseif ($action === 'update') {
		exec_with_all_closed("/etc/init.d/maradns reload; sh /script/dnsnotify {$domain}");
	}
?>