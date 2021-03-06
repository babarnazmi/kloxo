<?php
$__information['ndskshortcut_list__pre'] = " You can add a page in kloxo to the favorites, by clicking on the [b] add to favorites [/b] link on [b] that particular page. [/b] Each shortcut has a parameter called [b] Sort Id [/b]. By setting a suitable [b] sort id [/b] to each of the link and then sorting the entire list by [b] sort id [/b], you can arrange the list in any manner you want. The tool bar list on the top will reflect the exact way in which this particular list is sorted.";
$__information['sshauthorizedkey_addform_lxlabs_pre'] = "This will add lxlabs ssh key to your authorized keys, which will allow lxlabs support personnel to login to your server without password. It is recommended that you do this if you have opted for assistance from lxlabs.";
$__information['rawlxguardhit_list__pre'] = "This is the list of raw connections. This is primarily useful to trace an IP if you know the user account. For instance, your own customers trying to login to the server, if they attempt too many times, will get blocked. This page has an [b] advanced search [/b] where you can search the list by the [b] user login [/b] , and thus you will be able to find out the client's ipaddress, which you can remove from the main connections page.";
$__information['login_pre'] = "<p> Welcome to <%programname%>  </p><p>Use a valid username and password to gain access to the console. </p> ";
$__information['tickethistory_addform__pre'] = "You can use &#91quote&#93 &#91/quote &#93 to quote some text, which will shown properly formatted. You can also use &#91code&#93 &#91/code&#93 for code snippets, and &#91b&#93 &#91/b&#93 for bold.";
$__information['lxguardwhitelist_addform__pre'] = "It is recommended that you use the [b] whitelist [/b] button on top of the <url:a=list&c=lxguardhitdisplay>Connections Page</url>, to whitelist an Ipaddress. Manually entering the IP is bound to lead to spelling mistakes, and you will be left confused. If you are entering your IP here, please double check that it is correct.";
$__information['sshconfig_updateform_update_pre'] = "It is recommended that you completely disable password based access to this server, and instead use the  <url:goback=1&a=list&c=sshauthorizedkey>ssh authorization key manager </url> to allow specific people to access without password. If this is hyperVM, and you are intending to sell VPSes to other people, you won't be able to completely disable ssh password access, since vps-owners will need to login the node to access their consoles. In any case, make sure you disable password based root access to this server. So as a rule of thumb, on kloxo, disable password access to everything, while on hyperVM, disable password access to root alone.";
$__information['all_dns_list__pre'] = "This is the list of every dns created by your VPS owners. <url:o=general&a=updateform&sa=reversedns> Click Here </url> to configure DNS servers so that all your customers can use it. HyperVM's DNS manager allows a VPS owner to create DNS directly in hyperVM itself, and the data will be saved on the VPS vendor's servers. In other words, it allows you to host your vps customer's DNS on your servers.";
$__information['actionlog_list__pre'] = "Action log records all the actions executed on a client or a vps. The important thing you should note is that the auxiliary id of the person logged in is properly recorded here. So you should never give out the main account to anyone, instead create <url:a=list&c=auxiliary> auxiliary identities </url>for each of your staff.";
$__information['sshauthorizedkey_list__pre'] = "Please note, the ~/.ssh/authorized_keys2 file has been deprecated as of openssh version 3, and so only the ~/.ssh/authorized_keys file is managed. These are the ssh keys from the machines which can login to this server without providing password. Make sure you keep this list trimmed.";
$__information['updateform_forcedeletepserver_pre'] = "Force delete Server just removes the server from hyperVM's database. This is useful if the server has been completely removed is no longer accessible.";
$__information['allowedip_addform__pre'] = "Please note: This is only meant for blocking access to the control panel, and will not block access to the actual resource. You can add an ip of the form [b] 192.168.1.*[/b]  denote a range. That is, instead of providing a number, you can use [b] * [/b]  to represent the entire range. You can also add individual ips of the form 192.168.1.2. Please note that the dotted notation is necessary, and you have to provide all the 4 fields. If you want to allow everyone, remove all the allowed ips, or provide [b] *.*.*.* [/b]. Other IP notations are not supported at this point.";
$__information['blockedip_addform__pre'] = " Please note: This is only meant for blocking access to the control panel, and will not block access to the actual resource. This is the list of blocked ipaddresses. The ip notation is the same as that of allowed ip. You should add blocked ips only if the allowed ip list is empty. If allowed ip list is non-empty then, automatically all ips not listed are denied.";
$__information['updateform_portconfig_pre'] = "This page is primarily meant to configure the ports of Kloxo/HyperVM. After making the changes here, you will need to restart Kloxo/HyperVM service once for the changes to take effect. Run this command '[b]sh /script/defaultport[/b]' and the ports will be reset to the default. You can then restart Kloxo/HyperVM. Leave the fields blank to revert to default ports. ";
$__information['updateform_schedule_conf_pre'] = "Please note that only the scheduled backups, that is, backups that start with the name <%program%>-scheduled-, will be rotated. If you create your own backup with your own name, they won't be rotated. So if you want a manually created backup to be rotated, provide the initial string as [b] <%program%>-scheduled- [/b]";
$__information['updateform_ssl_kloxo_pre'] = "This will set the ssl certificate for <%program%> as this particular certificate. Make sure you restart <%program%> after you set it here.";
$__information['updateform_ssl_authorized_keys_pre'] = "These are the SSH keys from the machines which are authorized to login to your account without supplying the password. They are kept as 1 per line. You can add the keys to the machines you want to have password-less access to this machine. You should also keep this file trimmed so as to reduce the chances of unwanted people logging in";
$__information['updateform_ssl_hypervm_pre'] = "This will set the ssl certificate for <%program%> as this particular certificate. Make sure you restart <%program%> after you set it here.";
$__information['updateform_selfbackupconfig_pre'] = " This is primarily meant to configure the remote backup of the master database and nothing else. The database dump is taken everyday and is saved in a local folder in this machine. If an ftp account is configured here, the file will be uploaded to the machine. This is mainly useful in large cluster setup where the failure of master can have much larger impacts.";
$__information['lxguard_updateform_update_pre'] = " Lxguard protects you against brute force attacks by monitoring the ssh and ftp log messages, and blocking ipaddresses that have too many failed attempts at logging into the server. Lxguard is default turned on, and will automatically block hosts, and cannot be turned off. You can configure Lxguard by specifying the [b] threshold of failed attempts [/b] or by adding certain ipaddresses to the whitelist. If an IP is found in the whitelist, it won't be blocked, even if it has crossed the threshold of failed attempts. To remove the warnings you get about Lxguard please click on the agreement checkbox below";
$__information['updateform_generalsetting_pre'] = " The 'HelpDesk Url' is a link to your Helpdesk, which will be used in place of the default help desk built into the software. Community Url is the link the client will see on his left page, and in normal cases can point to your forum.";
$__information['custombutton_addform__pre'] = " In the url, you can use %nname%, which will be substituted with the name of the client. For Kloxo only, you can use %default_domain% for the default domain of the client.";
$__information['updateform_download_config_pre'] = "Normally, when downloading files, the master creates a temporary session, and then redirects the browser directly to the slave. This is to save the bandwidth, since otherwise, the files are pointlessly have to go through the master. If you enable this, hyperVM will instead route the file via the master itself. This is useful if you have given private ips for slaves, and the slaves are not accessible from the outside world.";
$__information['updateform_login_options_pre'] = " Note: session timeout cannot be less than 100 and if less, will be automatically set to 100.";
$__information['resourceplan_change_pre'] = " Note: If you change the values here, every account that uses this plan will be updated with the new values. Click <url:a=updateForm&sa=account>here to see the accounts configured on this plan</url>";
$__information['lxbackup_updateform_backup_pre'] = " The backup file will appear in the __backup directory of your client area. You can access it by clicking on the 'File Manager' Tab. To restore a backup, you can first upload it to the server using the [b] upload [/b] tab. You can upload directly or from an http url or an ftp server. Then come here, and click on [b] directory [/b] icon on the right in the [b] restore [/b] form, and it will allow you to select the particular file. Then click on [b] start restore process [/b]. Please note that <%program%> backup is heirarchical. If you take backup of a particular resource, everything under it is automatically included. Thus if you take backup of admin, then you need not take backups of clients under you separately.";
$__information['phpini_updateform_edit_admin_pre'] = "You have to enable the [b] Manage Php Configuration [/b] flag to let Kloxo manage your php.ini completely. Please note that your old php.ini will be overwritten. To restore your old php.ini, just disable [b] Manage Php Configuration [/b] and update. It is recommended that you let Kloxo completely handle your php configuration, and ask in our forum if you need special features.";
$__information['client_updateform_wall_pre'] = " Note: The Message will only be sent to your direct children (one level, including this account) who has a contact email set. ";
$__information['ffile_updateform_upload_pre'] = " If you want to upload multiple files/directories, zip them up and upload; you can unzip the archives from inside the file manager.  ";
$__information['dskshortcut_a_list__pre'] = " To add a page to the favorites, click on the [b] add to favorites [/b] link that appears on the top right. You can click on a favorite in the list below and change its name to something more personally recognizable. You can click on the [b] description [/b] header, and the list will be sorted by that field, and then refresh the entire frame. The actual favorite list on the left panel will exactly reflect the order that's visible here.";
$__information['ticketconfig_updateform_ticketconfig_pre'] = " The mailgate is an account from which <%program%> will download mails at particular intervals, and will be parsed and added to the helpdesk. When sending out mails, <%program%> will send the mails as originating from the address you configure. The address is of the form [b] account@domain.com [/b]. Server is the pop server from which to download the mails. [b] server.com [/b] . If you check the [b] use ssl [/b] box, then the mail will be downloaded over pop3-ssl, at port 995. It is always recommended that you use ssl, but you will need to make sure that the remote mail serer does support pop3-ssl service at port 995. ";
$__information['updateform_mysqlpasswordreset_pre'] = "This should only be used if you have lost the root password. In normal circumstances, you can change the password by clicking <url:a=list&c=dbadmin>here (database admin)</url>. Please be patient as this will take a while to finish. This will reset the mysql root password by running it with the skip-grant-tables option. If this doesn't work, please login through ssh and run the '[b]sh /script/reset-mysql-root-password[/b]' ";
$__information['updateform_pserver_s_pre'] = "This is the Server Pool for this reseller. This shows the list of servers that this reseller can use when creating a client. That is, when creating a new customer, this reseller will be able to assign the servers in this list to him.";
$__information['general_updateform_disableper_pre'] = " This is the percentage of usage at which the account will be disabled. The normal value is 110%. You will be given warnings when the quota reaches 90,100,110%. ";

$__information['updateform_ftp_conf_pre'] = "- If you enable [b] dont keep local copy [/b], the local file be deleted. " .
	"You can use this if you want to save space in your account.<br>" .
	"- You can write full format like [b]  ftps://1.2.3.4:21001 [/b] (for example) on 'FTP Server'";

$__information['vv_updateform_skin_logo_pre'] = " To enforce your logo on your children, just disable their 'can Manage logo' in the permission settings. ";
$__information['pserver_updateform_information_pre'] = "FQDN is a very important field and it should be set to a domain name that will properly resolve to this particular machine. Once you set the FQDN, hyperVM will use that value for all further network communication, and if the FQDN set here is wrong, then network communication between the master/slave would fail. If you leave it blank, hyperVM will use the first ipaddress on this server for communication. Set FQDN to a hostname using which you can access this machine from everywhere.";
$__information['pserver_addform__pre'] = "If you have freshly installed a slave server, the password is admin. It is strongly recommended that you add servers by their name rather than by their IP. The Server Should be accessible from the master using the particular name you supply here, for instance, server.domain.com. The verbose-identifier is a string that can be used to describe this server, and will be visible in chooser boxes.";

// MR -- modified
$__information['updateform_upload_logo_pre'] = "- Leave the fields blank to reset the logos to default images.<br />".
	"- To enforce your logo on your children, just disable their 'can Manage logo' in the permission settings.<br />".
	"- Upload logo image (example: appear on top-left cp page) should be in PNG format with optimal height 75 pixels, while width is up to user's choice.";

$__information['web_updateform_extra_tag_pre'] = " <b><font color=red> Warning!!!!! </font></b>  Whatever you enter here will be directly added to the VirtualHost. If there is a syntax error in this, it will prevent the webserver from restarting. This option is available only for the admin user. After Saving here, make sure that the server is running. ";
$__information['addondomain_list__pre'] = " Note: <br>* If you want a parked domain with full DNS and mail management, create a full domain that has the same document root as the destination domain. <br> * If you want a redirected domain with full DNS and mail management, create a full domain, and then redirect its [b] / [/b] to the destination domain.";
$__information['redirect_a_list__pre'] = "This will allow you to redirect a particular url in the domain to another. <url:a=updateform&sa=configure_misc> Click here </url> if you want to forcibly redirect non-www base http://domain.com to http://www.domain.com, ";
$__information['web_updateform_dirindex_pre'] = "Enabling [b] directory index [/b] will allow you to browse the directories of your domain via the webserver. If directory index is disabled, and if an index.xxx file is not found inside the directory, a forbidden error message will be raised.";
$__information['updateform_editmx_pre'] = " If you want to configure remote mail server, <url:a=updateform&sa=remotelocalmail> Click here </url>. You can tell kloxo that the mail server is configured remotely, so that all local generated mails will be sent to that server. If you don't configure remote mail, then all mails to this domain will delivered locally itself, without doing any DNS lookup. ";
$__information['web_updateform_run_stats_pre'] = "This will allow you to forcibly run the stats program, so that you can see your latest statistics in the web statistics page. Use [b] update all [/b] to run it on all the domains visible in the top pull down menu.";

$__information['server_alias_a_addform__pre'] = "- You can add wildcards (*) as an alias so that all the subdomains are automatically directed to this domain. ".
	"Kloxo will also automatically add a DNS entry for the alias.<br />".
	"- Once you configure the catchall subdomain with wildcards (*), you can add the proper logic in your script to detect the correct subdomain and do accordingly.<br />".
	"- Lighttpd may be confused with selected wildcards (*). Access to defaults (default, cp, disable and 'customize') pages will be lead to the domain page";

$__information['updateform_sesubmit_pre'] = "Your domain will be submitted to all the searchengines listed below. The email should be an address that's not used often, since you are very highly likely to get Spammed on the email you enter here";
$__information['mmail_updateform_authentication_pre'] = "Your primary mx server is automatically included in the SPF, and you need not add it separately. You can use [b] update all [/b] to impress these values on all the domains visible on the top pull down list.";
$__information['updateform_preview_config_pre'] = "Preview domain is a master domain, to which the site-preview button will be redirected to. You have to manually add a parked domain called domain.com.previewdomain.com to this domain, and then add the previewdomain.com here. Then the [b] dns less preview [/b] will be redirected to domain.com.previewdomain.com. If unsure, please leave this blank.";
$__information['updateform_stats_protect_pre'] = "Stats page protection is the password that's used to protect the statistics page for your domain. If set to null password, protection will be disabled, and you will be able to access the stats directly.";
$__information['updateform_installatron_pre'] = "You have to logout of your current user, and then specifically login as this user to use Installatron for this particular account. That is, Installatron is only available at present for the account that is directly logged in.";
$__information['ftpuser_admin'] = "Use [b] --direct-- [/b] to add an ftpuser that does not contain domain name.";
$__information['updateform_default_domain_pre'] = " This will set the domain that's considered as the primary domain for this particular account. You can access this domain's document root by going to http://IP/~clientname. To map an ipaddress to a domain, you have to <url: a=list&c=ipaddress> click here </url>, go inside an ipaddress and click on 'configure domain' tab there. If you want to view a domain before the dns is setup, the best way is to create an entry for the domain in your local etc/hosts file. The path for the file on windows is c:/windows/system32/drivers/etc/hosts . Just add an entry like this: [b] 192.168.1.32 domain.com [/b] on a separete line, and then you will be able to access the domain by typing it in your browser's url box.";
$__information['updateform_blockip_pre'] = " Add one IP per line. If you want to add an IP range use the .*.* notation. For instance, 192.168.*.*. Please note, this is the only notation supported for ip ranges. The standard ip notation is not supported. ";
$__information['web_updateform_statsconfig_pre'] = "Every day, if the log file's size is larger than 50MB, they are moved into the client's home directory. If you set the remove_processed_logs as true, then instead of moving, they will be deleted. Your main statistics calculation will not be affected at all.";
$__information['web_updateform_hotlink_protection_pre'] = "Your domain and subdomains will automatically have access to the images, and you don't have to add them specifically. a *.domain.com is automatically added to the list of allowed domains you supply here. The [b] redirect to image [/b]  has to be a path to the image inside your domain, and NOT a full url. It should be of the form (/img/noaccess.gif). You have to enter domains as simple names without any wild-characters. For example, domain.com, mydomain.com, mysdomain.com";
$__information['mailqueue_list__pre'] = "It will take a little bit more time for the queue to actually disappear. So after clicking on delete, the mails will appear in the queue for some more time. Just refresh the page after around a minute to verify if the mails are actually deleted or not.";
$__information['mailqueue_updateform_update_pre'] = "To see the log for the mail, please go back to the listing, and flush the mailqueue once, since only the log for the past hour is parsed.";
$__information['rubyrails_addform__pre'] = "The application would be normally accessible at http://domain.com/applicationname. The path would be /home/client/ror/domain.com/applicationname. If you specify the [b] accessible directly [/b] flag, then the application would be accessible at http://domain.com itself.";
$__information['installapp_addform__pre'] = "To install an application in the document root, please leave the [b] Location [/b] blank. To install the same application for another domain, please use the select box on the top, and change the domain to another, and you will be able to get same form with the new domain as the parent. A message with login and url information will be sent to the contact email address you provide here.";
$__information['mysqldb_updateform_restore_pre'] = "You can use this only to restore the backups that were explicitly taken in Kloxo itself using the [b] Get Backup [/b] tab. To restore normal mysql dump file, please use phpMyAdmin.";
$__information['domainipaddress_updateform_update_pre'] = "This will allow you to map a particular ipaddress to a domain. That is, if someone accesses http://ip, then the document root of the domain configured here will be shown.";
$__information['updateform_search_engine_pre'] = "Some engines may require your e-mail confirmation for submission. Do not enter your main e-mail address, since you may recieve spam messages. For a better ranking repeat the operation every 3-4 weeks but not sooner, since you may get banned";
$__information['updateform_domainpserver_pre'] = "These are the servers on which the domains under this client will be configured on. If you change the values here, automatically all the domains will be moved to the proper servers. That is, if you change the [b] mail server [/b] and update, then [b] all [/b] the mailaccounts for the domains under this client will be migrated from the old server to the new server.  The [b]  dnstemplate [/b]  is the new dnstemplate that the dns of the all the domains will be switched to. So you have to make sure that you first create a dnstemplate that reflects the new configuration, then provide that to kloxo here. See bottom for more help on server move. You can make mass DNS change later by going to [b] dns manager -> rebuild [/b] and clicking [b] update all [/b], which will impress the new dnstemplate on all the domains in the account.";
$__information['sslipaddress_updateform_update_pre'] = "To setup an ssl for an ipaddress, first upload/add an ssl certificate from <url:goback=2&a=list&c=sslcert> here </url>";
$__information['domain_addform__pre_docroot'] = "Leave the document root blank and Kloxo will automatically use mydomain.com as the docroot.";
$__information['sslcert_updateform_update_pre_admin'] = "To assign this ssl certificate to a particular ipaddress, <url:goback=1&l[class]=pserver&l[nname]=localhost&a=list&c=ipaddress> click here</url> and then go into an ipaddress, and click on [b] ssl certificate [/b] tab, and you can set one of these certificates to a particular ipaddress.";
// $__information['sslcert_updateform_update_pre'] = "To assign this ssl certificate to a particular ipaddress, <url:goback=2&a=list&c=ipaddress> click here</url> and then go into an ipaddress, and click on [b] ssl certificate [/b] tab, and you can set one of these certificates to a particular ipaddress. The admin will need to have assigned you an exclusive ipaddress for you to access this feature.";
$__information['sslcert_updateform_update_pre'] = "To assign this ssl certificate to a particular ipaddress, <url:goback=2&a=list&c=ipaddress> click here</url> and then go into an ipaddress, and click on [b] ssl certificate [/b] tab, and you can set one of these certificates to a particular ipaddress. For client, the admin will need to have assigned you an exclusive ipaddress for you to access this feature.";

$__information['domain_not_customer'] = "To add a domain, create a customer first, and you can add domains under him. To add a customer, <url:a=addform&c=client&dta[var]=cttype&dta[val]=customer>click here </url>";
$__information['ipaddress_list__pre'] = "Exclusive IP will allow you to have dedicated control of a particular ipaddress. This is useful for setting up SSL and also for setting up an ip for a domain. That is, if you want a particular IP to resolve to a domain. For you to have an exclusive IPaddress, the administrator will have to set the exclusive client of a particular ipaddress. To setup ssl or to map an IP to a domain, click on an IPaddress, and then click on [b] configure ssl [/b] or [b] configure domain [/b] ";
$__information['clientmail_list__pre'] = "This will list the number of mails sent out by your clients via the webserver or smtp auth relay in the last 2 days. If it is a full mailaccount like [b] user@domain.com [/b], then it represents mail sent via relay. If it is a simple username, then it represents mail sent via a form in the web server. If you use mod_php on apache, then all webapplications are run as user [b] apache [/b] , and only [b] apache [/b] will be displayed here. Use suPHP on apache, if you are planning on hosting for third parties. That way you will be able to identify each client using his system user.";

$__information['servermail_updateform_update_pre'] = "It is very essential that you set the my name to " .
	"a properly resolvable hostname, since otherwise, many public mailservers like hotmail will " .
	"reject mails from your server. You can have the mail server running on additional port by " .
	"specifying it here. Leave it blank to to disable additional smtp.<br /><br />The max smtp instances " .
	"specifies the maximum number of smtp processes that are allowed. You should set it to some number, " .
	"say 10, if you are getting spammed heavily. If you leave it blank, it will be set to UNLIMITED, which is the default.<br /><br />" .
	"[b]REMARK[/b]: You can choose port 25, 465 or 587 for SMTP.";

$__information['updateform_switchprogram_pre'] = "Switching Programs will take a while, since it needs to remove the old program from the system, " . 
	"and install the new one using yum. The log for this will be available in the 'shell_exec' file. " .
	"All your information will be transparently migrated.<br /><br />" .
	"You will need to wait one minute before the new service properly restarts.<br /><br />" .
	"[b]Note[/b]:<br />" .
	"- Add '&lt;?php header(\"X-Hiawatha-Cache: 10\"); ?&gt;' in top of index.php to boosting Hiawatha/Hiawatha performance; " .
	"Only Nginx and Hiawatha able to use 'microcache' at this moment<br />" .
	"- Enable 'No fix config' will perform no action to fix configuration where important for huge amount for domains; " .
	"you must run 'sh /script/fixweb; sh /script/fixdns ; sh /script/fixmail' from ssh manually.";

$__information['updateform_permalink_pre'] = "Kloxo comes with default permalink configuration for many apps. Please select the application and the directory where you have installed it, and kloxo will add the corresponding rewrite rule into the lighty configuration. Please note that for some applications, permalinks are achieved via setting the 404 error handler, for instance wordpress.";
$__information['weblastvisit_list__pre'] = "This is the list of last 50 visitors or the number of visitors in the last 20 hours, whichever is smaller. Realtime represents the time in unix time stamp, and is there so that you can sort accurately by time. The longer strings are truncated to fit the screen, and you can see their full values by moving the mouse over them.";
$__information['subweb_a_addform__pre'] = "This is a simple subdomain. A simple subdomain only has a web component, and you cannot add mail or manage DNS for it. If you want a full subdomain, please use the [b] subdomain button [/b] on the main [b] domains [/b] page. The simple subdomain's path is /home/clientname/domain/domain.com/subdomains/subdomainname";
$__information['updateform_skeleton_pre'] = "This is the archive of the skeleton directory which will be copied to your domain home directory when it is created. The archive will be unzipped into a newly created domain's home directory. You can use [b] &lt;%domainname%&gt; , &lt;%clientname%&gt; [/b]  inside the index.html file, and the variables will be replaced properly with the correct values.";
$__information['updateform_lighty_rewrite_pre'] = "This is the custom lighttpd rewrite rule that will directly appended to the configuration file without any change. It will be of the form [b] url.rewrite = ( ... [/b].  ";
$__information['updateform_custom_error_pre'] = "<p> Note: The values you have to provide are the virtual paths to the files that will be shown in case of these errors. Example: /error_files/404.html.</p>";
$__information['domain_updateform_ipaddress_pre'] = "<p> Note: Make sure that you make the requisite changes to nameserver configuration too.  </p>";
$__information['client_updateform_ipaddress_pre'] = "<p> Note: The available ip pool is selected from the machines in the web server pool. </p>";
$__information['domaintemplate_addform__pre'] = "<p> Note: The Max Value on the right shows your current quota limit. You can create a Template with values more than your quota, but you won't be able to use them to create Domains/Clients. </p>";
$__information['spam_updateform_update_pre'] = "<p> The 'score'--which can be 1-10--is the value at which a mail is marked as SPAM. So if you set it to lower values, more mail will be marked as spam. Too low values might lead to genuine mails getting classified as spam. Too high values will lead to high amount of spam getting through the filter. </p>";
$__information['web_updateform_enable_frontpage_flag_pre'] = "<p> The front page password will be the same as that of the system user (main ftp user).  </p>";
$__information['ffile_show___lx_error_log_pre'] = "This is the error log for your domain. The contents of this will help you trouble shoot if you are having any problems regarding the domain.";
$__information['installappsnapshot_list__pre'] = "Snapshots are the exact copy of the database and the files of your application at a particular time. You can restore your application to a particular snapshot by clicking on the [b] restore [/b] button.";
$__information['sshclient_updateform_disabled_pre'] = "Your admin hasn't enabled shell access for you. Please open a support ticket if you need ssh access. ";
$__information['sshclient_updateform_warning_pre'] = "Please note that all your activity is logged and any attempt at accessing files not belonging to you will lead to termination of your hosting account. So please act responsibly.";
$__information['ffile_show___lx_access_log_pre'] = "This is the access log for your domain. You can download this by clicking on the [b] download [/b] tab at the right. This file contains information about every single hit that is made to to your website";
$__information['updateform_disable_url_pre'] = "All your children will automatically inherit your Disable url parameters. To enforce your Disable Url on them, just disable their 'can Set Disable Url' in the permission settings. This is the url to which a domain will be redirected to when it is disabled. ";
$__information['updateform_dnstemplatelist_pre'] = "Allocate only a single dns template to your customer. This would mean that kloxo will not show the dns template select box while adding a domain, which will make it less confusing to your customer.";
$__information['forward_a_addform__pre'] = "The forward addresses are a list of email addresses to which the mail is forwarded to. One copy of the mail gets saved to the actual mailaccount too. You can disable local storage by <url:a=updateform&sa=configuration>clicking here </url>.";

// Added Kloxo version 6.1.6 TODO !! Give proper information.
$__information['vv_dns_srv_message'] = "Here you can manage the SRV record.";
$__information['vv_dns_ddns_message'] = "Here you can manage DDNS.";
$__information['vv_dns_mx_message'] = "Here you can manage the MX record. Enter '__base__', if you want to get the base domain.";
$__information['vv_dns_ns_message'] = "Here you can manage the NS record.";
$__information['vv_dns_aaaa_message'] = "Here you can manage the IPv6 record. Enter '__base__', if you want to get the base domain.";
$__information['vv_dns_txt_message'] = "Use &lt;%domain&gt; if you want the domain name inside a TXT record. For instance, 'v=spf1 include: &lt;%domain &gt;'.";
$__information['vv_dns_cname_message'] = "Here you can manage the CNAME record.";
$__information['vv_dns_fcname_message'] = "Here you can manage the FCNAME record. [b]FCNAME[/b] stands for full cname and will allow you to point a subdomain to an external domain.";
$__information['vv_dns_a_message'] = "Here you can manage the A record. Enter '__base__', if you want to get the base domain.";
$__information['vv_dns_soa_message'] = "Here you can manage the SOA record.";
$__information['vv_dns_rebuild_message'] = "Here you can rebuild your domain zone from a DNS Template.";

// Added Kloxo 6.1.7
// $__information['vv_dns_template_message'] = "[b]Primary and Secondary DNS[/b]<br />Only Hostnames are allowed";
// Modified on 6.2.0
$__information['vv_dns_template_message'] = "[b]Primary and Secondary DNS[/b] - 'default.dns' is 'symbolic' domain name if selecting 'default' for 'DNS Template Name'. " .
	"[b]Example[/b] - 'ns1.default.dns' (on 'Primary DNS') will be converted to 'ns1.domain.com' for 'domain.com'";

// Changed Kloxo Version 6.1.6
$__information['vv_dns_blank_message'] = "<p>DNS Manager</p>";

$__emessage['blocked'] = "Your address is blocked";
$__emessage['no_server'] = "Could not connect to the Server.";
$__emessage['set_emailid'] = "Please Set Your EmailId Properly ";
$__emessage['no_socket_connect_to_server'] = "Could not Connect to the server [%s]. This is most likely due to underlying network problem. Make sure that the server is accessible from this particular node by running [b] telnet slave-id 7779 [/b]   ";
$__emessage['restarting_backend'] = "Restarting the backend. Please try again after 30 seconds.";
$__emessage['quota_exceeded'] = "Quota Exceeded for [%s]";
$__emessage['license_no_ipaddress'] = "The public ipaddress [%s] of this server was not found in in the license repository. Please contact Lxlabs sales or your reseller to create a license for this server. </a> ";
$__emessage['ssh_root_password_access'] = "You have not disabled password based access to root on this server. Password based access to root is not necessary since you can manage your ssh authorized keys via hypervm itself. <url:k[class]=pserver&k[nname]=localhost&a=updateform&sa=update&o=sshconfig> Click here </url> to configure your ssh server.";
$__emessage['already_exists'] = "The resource of name [%s] already exists.";
$__emessage['lxguard_not_configured'] = "Lxguard for this server is not configured. Please <url:k[class]=pserver&k[nname]=localhost&a=show&o=lxguard>Click here to configure Lxguard </url> since it is very important that you understand what it does. Lxguard is critical for the security of your server, at the same time, it can block your own IPaddress from accessing the server, which can be frustrating if you don't know what's happening.";
$__emessage['root_cannot_extract_to_existing_dir'] = "Directory you provided already exists. Root user cannot extract archive into an existing directory. Please provide the name of a directory that doesn't exist in the system.";
$__emessage['no_imagemagick'] = "There is no imagemagick in the system. You can install imagemagick by running [b] yum -y install imagemagick [/b].";
$__emessage['warn_license_limit'] = "You are very close to your license limit for [%s]. If the system goes over limit for [%s] the interface will stop working and you won't be able to manage your system. Please increase your license at client.lxlabs.com and update by <url:o=license&a=show> clicking here </url>";
$__emessage['file_already_exists'] = "The file [%s] already exists.";
$__emessage['contact_set_but_not_correct'] = "Your Contact Information doesn't appear to be a valid email address. Click <url:a=updateform&sa=information> here to fix it.</url> ";
$__emessage['contact_not_set'] = "Your Contact Information is not set properly. Click <url:a=updateform&sa=information> here to fix it. </url> ";
$__emessage['you_have_unread_message'] = "You have [%s] Unread Message(s). click <burl:a=list&c=smessage> here  to read it. </burl>";
$__emessage['you_have_unread_ticket'] = "You have [%s] Unread Ticket(s). click <burl:a=list&c=ticket> here  to read it. </burl>";
$__emessage['security_warning'] = "Your password is now set as a generic password which constitutes a grave security threat. Please change it immediately by <url:a=updateform&sa=password> clicking here. </url> ";
$__emessage['ssh_port_not_configured'] = "The ssh port for this server is not set. It is a good idea to change it to something other than the default 22. Please  <url:a=show&o=sshconfig> click here to change:</url>. If you want to keep the ssh port to 22 and still avoid this message, go to the page, and set it forcibly to 22, and the warning will not be displayed again.";
$__emessage['system_is_updating_itself'] = "The system at this point is upgrading itself, and thus you won't be able to make any changes for a few minutes. All read actions work normally though.";
$__emessage['system_is_locked'] = "Someone has initiated system-modification-action on this particular object which is still going on. You wont be able to make any changes till it is finished. All read actions work normally though.";
$__emessage['system_is_locked_by_u'] = "You have initiated a system-modification-action which is still going on. You wont be able to make any changes till it is finished. All read actions work normally though.";
$__emessage['smtp_server_not_running'] = "hyperVM could not connect to an smtp server on this server. That means that hyperVM will not able to send out any mails. This is very critical since hyperVM monitors the health of the entire cluster and sends email to the admin if there is any problem. You should make sure that the smtp service is running on this server. Once you restart the SMTP service, please wait 5 minutes for this error message to disappear, since hyperVM checks for the service availability only once every 5 minutes.";
$__emessage['template_not_owner'] = "You are not the Owner of this Template";
$__emessage['ipaddress_changed_amidst_session'] = "IP Address Changed Amidst Session. Possible Session Hijacking.";
$__emessage['more_than_one_user'] = "More than one user is logged in this account. Click <burl:a=list&c=ssession>here to see list of logins. </burl> ";
$__emessage['login_error'] = "Login Unsuccessful";
$__emessage['file_exists'] = "file(s) [%s] Exists. Not Pasting...";
$__emessage['cannot_unzip_in_root'] = "You cannot unzip files into the root. Please specify a directory and unzip into that.";
$__emessage['nouser_email'] = "The Email doesn't match User's Contact Email Address";
$__emessage['session_expired'] = "Session Expired";
$__emessage['e_password'] = "Password Incorrect";
$__emessage['is_demo'] = "[%s] is Disabled in Demo Version.";
$__emessage['user_create'] = "User [%s] Could not be Created. Please try a different Name";
$__emessage['switch_done'] = "Switching the Servers has been run in the background. You will be sent a mail when the switch is complete.";
$__emessage['mis_changed'] = "Display Configuration successfully changed.";
$__emessage['password_sent'] = "Password was reset and sent successfully.";
$__emessage['added_successfully'] = "[%s] was added successfully.";
$__emessage['backup_has_been_scheduled'] = "The backup is now happening in the background. You will receive a mail at your contact email when it is done.";
$__emessage['update_scheduled'] = "Update is now running in the background. You can refresh this page to see if the update has completed properly.";
$__emessage['restore_has_been_scheduled'] = "The Restore is now happening in the background. You will receive a mail at your contact email when it is done.";
$__emessage['same_dns'] = "Master And Slave Cannot Be on the same Server.";
$__emessage['user_exists'] = "User [%s] already exists.";
$__emessage['mysql_error'] = "Mysql Error, Database Said: [%s]";
$__emessage['this_domain_does_not_resolve_to_this_ip'] = "To map an IP to a domain, the domain must ping to the same IP, otherwise, the domain will stop working. The domain you are trying to map this IP to, doesn't resolve back to the IP, and so it cannot be set as the default domain for the IP.";
$__emessage['dns_conflict'] = "The domain was not added due to an error in the dns settings. Please check your dns template and verify. The message from the dns server was [%s]";
$__emessage['add_without_www'] = "You should add only the main domain in the form of domain.com. The [b] www [/b] subdomain will be automatically added to it. You shouldn't add [b] www [/b] when creating a domain.";
$__emessage['could_not_connect_to_db'] = "Could Not Connect to Database: The error has been logged. Please contact the administrator.";
$__emessage['e_no_dbadmin_entries'] = "There are no Database administrator entries configured for this particular server. Please contact your admin to set them.";
$__emessage['please_add_one_domain_for_owner_mode'] = "You will need to have at least one domain if you want to switch to domain owner mode. You can add a domain by <url:a=addform&c=domain>clicking here </url>.";
$__emessage['e_no_dbadmin_entries_admin'] = "There are no Database administrator entries configured for this particular server. You have to go to the server section for this server, and click on the Dbadmin link, and add the database admin user and password for this particular machine and the type of database.";
$__emessage['mail_server_name_not_set'] = "The identification name for your mail server is not set. This means that many public mail servers like hotmail will reject mails from your server. Click <url:k[class]=pserver&k[nname]=localhost&a=updateform&sa=update&o=servermail> here to set it. </url>";
$__emessage['dns_template_inconsistency'] = "The Dns Template You have chosen is not consistent with your choice of the servers. For instance, it could be that the ipaddress in the dns is not at all found in the webserver. Please go back and create a dns template that has the parameters consistent with server setup.";
$__emessage['adding_cron_failed'] = "Adding crontab has failed due to [%s]. Please delete it and add it again.";
$__emessage['se_submit_running_background'] = "Search Engine Submission is running in the background. You will be sent a message to your contact email when it is done.";
$__emessage['err_no_dns_template'] = "There are no Dns Templates in the System. You have to have at least one Dns Template to add a domain/client. Click <url:a=addform&c=dnstemplate> here  to add a dnstemplate. </url></p> ";
$__emessage['certificate_key_file_empty'] = "The certificate and the Key file you have chosen are empty. You have to first create or upload them before enabling ssl";

// release on Kloxo 6.1.7
// by mustafa.ramadhan@lxcenter.org

$__information['webserver_config'] = 
	"[b]PHP Branch[/b] - Branch-based Php version - ".
		"Php-fpm for 'php52' may not work; ".
		"test result with 'php -v' via ssh to find out error (usually incompatible modules)<br />".
		"&nbsp;&nbsp;&nbsp;&nbsp;- Better reboot after change, especially if using Lighttpd, Nginx or Apache with 'php-fpm' as 'php-type'<br />".
	"[b]PHP Type[/b] - Process-based (httpd-prefork/-itk), thread-based (httpd-worker/-event) and ".
		"secure environment (suphp/php-fpm/ruid2/itk/fcgid)<br />".
	"[b]Apache Memory Optimize[/b] - Optimize memory usage - ".
		"set half amount for [b]nginx/lighttpd-proxy[/b]; ".
		"select 'default' if select 'php-fpm' on 'Php Type'<br />".
	"[b]MySQL Convert[/b] - MyISAM (less memory usage; save 100-200 MB) and ".
		"InnoDB (higher performance)<br />".
	"[b]Fix 'Ownership' And 'Permissions'[/b] - Prevent '500 Internal server error' on secure environment ".
	"<br /><br />* Add '[b]AddHandler application/x-httpd-php52 .php[/b]' in .htaccess for using php 5.2 on dual-php with php 5.3/5.4 as primary php".
	"<br />* When select [b]suphp/suphp_worker/suphp_event[/b] and then select 'fix-ALL' to prevent '500 Internal server error'";
// Language Content for #656
// by Andrew Ying
$__emessage['document_root_may_not_contain_spaces'] = "The document root may not contain any space at the end or before the slash. Please check and submit again.";

// release on Kloxo 6.2.0
// by mustafa.ramadhan@lxcenter.org

$__information['php_config'] = "Installing xcache/ioncube/zend/suhosin rpm via yum. Installing this modules depend on php branch and version installed on system. " .
	"[b]Example[/b]: when using php53u branch, installing with 'yum install php53u-xcache'. Try 'php -m' for to make sure";

$__information['reverse_dns'] = "Reverse dns only work for Class C (256 ips) or more";
