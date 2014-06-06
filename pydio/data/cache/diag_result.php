<?php $diagResults = array (
  'Client' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36',
  'Command Line Available' => 'No : ',
  'DOM Enabled' => 'Yes',
  'GD Enabled' => 'Yes',
  'Upload Max Size' => '6M',
  'Memory Limit' => '128M',
  'Max execution time' => '30',
  'Safe Mode' => '0',
  'Safe Mode GID' => '0',
  'Xml parser enabled' => '1',
  'MCrypt Enabled' => 'Yes',
  'Server OS' => 'WINNT',
  'Session Save Path' => 'c:/wamp/tmp',
  'Session Save Path Writeable' => true,
  'PHP Version' => '5.3.13',
  'Locale' => 'C',
  'Directory Separator' => '\\',
  'PHP APC extension loaded' => 'Yes',
  'PHP Output Buffer disabled' => 'No',
  'Magic quotes disabled' => 'Yes',
  'Upload Tmp Dir Writeable' => true,
  'PHP Upload Max Size' => 6291456,
  'PHP Post Max Size' => 8388608,
  'Users enabled' => true,
  'Guest enabled' => false,
  'Writeable Folders' => '[<b>cache</b>:true,<br> <b>data</b>:true]',
  'Zlib Enabled' => 'Yes',
);$outputArray = array (
  0 => 
  array (
    'name' => 'Pydio version',
    'result' => false,
    'level' => 'info',
    'info' => 'Version : 5.2.3',
  ),
  1 => 
  array (
    'name' => 'Client Browser',
    'result' => false,
    'level' => 'info',
    'info' => 'Current client Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36',
  ),
  2 => 
  array (
    'name' => 'PHP Command Line',
    'result' => false,
    'level' => 'warning',
    'info' => 'Php command line not detected, this is NOT BLOCKING, but enabling it could allow to send some long tasks in background. If you do not have the ability to tweak your server, you can safely ignore this warning.<br> On Windows, try to activate the php COM extension, and set correct rights to the cmd exectuble to make it runnable by the web server, this should solve the problem.',
  ),
  3 => 
  array (
    'name' => 'DOM Xml enabled',
    'result' => true,
    'level' => 'error',
    'info' => 'Dom XML is required, you may have to install the php-xml extension.',
  ),
  4 => 
  array (
    'name' => 'PHP error level',
    'result' => false,
    'level' => 'info',
    'info' => 'E_ERROR | E_WARNING | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE',
  ),
  5 => 
  array (
    'name' => 'PHP GD version',
    'result' => true,
    'level' => 'warning',
    'info' => 'GD is required for generating thumbnails',
  ),
  6 => 
  array (
    'name' => 'PHP Limits variables',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>
Upload Max Size=6M
Memory Limit=128M
Max execution time=30
Safe Mode=0
Safe Mode GID=0
Xml parser enabled=1',
  ),
  7 => 
  array (
    'name' => 'MCrypt enabled',
    'result' => true,
    'level' => 'error',
    'info' => 'MCrypt is required by all security functions.',
  ),
  8 => 
  array (
    'name' => 'PHP operating system',
    'result' => false,
    'level' => 'info',
    'info' => 'Current operating system WINNT',
  ),
  9 => 
  array (
    'name' => 'PHP Session',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>',
  ),
  10 => 
  array (
    'name' => 'PHP version',
    'result' => true,
    'level' => 'error',
    'info' => 'Minimum required version is PHP 5.3.0',
  ),
  11 => 
  array (
    'name' => 'PHP APC extension',
    'result' => true,
    'level' => 'warning',
    'info' => 'PHP APC extension detected, this is good for better performances',
  ),
  12 => 
  array (
    'name' => 'PHP Output Buffer disabled',
    'result' => false,
    'level' => 'warning',
    'info' => 'You should disable php output_buffering parameter for better performances with Pydio.',
  ),
  13 => 
  array (
    'name' => 'Magic quotes disabled',
    'result' => true,
    'level' => 'error',
    'info' => 'Magic quotes need to be disabled, only relevent for php 5.3',
  ),
  14 => 
  array (
    'name' => 'SSL Encryption',
    'result' => false,
    'level' => 'warning',
    'info' => 'You are not using SSL encryption, or it was not detected by the server. Be aware that it is strongly recommended to secure all communication of data over the network.<p class=\'suggestion\'><b>Suggestion</b> : if your server supports HTTPS, set the AJXP_FORCE_SSL_REDIRECT parameter in the <i>conf/bootstrap_conf.php</i> file.</p>',
  ),
  15 => 
  array (
    'name' => 'Server charset encoding',
    'result' => false,
    'level' => 'warning',
    'info' => 'You must set a correct charset encoding in your locale definition in the form: en_us.UTF-8. Please refer to setlocale man page. If your detected locale is C, please check the <a href="http://ajaxplorer.info/knowledge-base-2/f-a-q/#39172">F.A.Q.</a>. Detected locale: C (using UTF-8)<p class=\'suggestion\'><b>Suggestion</b> : Set the AJXP_LOCALE parameter to the correct value in the <i>conf/bootstrap_conf.php</i> file</p>',
  ),
  16 => 
  array (
    'name' => 'Upload particularities',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>
Upload Tmp Dir Writeable=1
PHP Upload Max Size=6291456
PHP Post Max Size=8388608',
  ),
  17 => 
  array (
    'name' => 'Users Configuration',
    'result' => false,
    'level' => 'info',
    'info' => 'Current config for users',
  ),
  18 => 
  array (
    'name' => 'Required writeable folder',
    'result' => false,
    'level' => 'info',
    'info' => '[<b>cache</b>:true,<br><b>data</b>:true]',
  ),
  19 => 
  array (
    'name' => 'Zlib extension (ZIP)',
    'result' => false,
    'level' => 'info',
    'info' => 'Extension enabled : 1',
  ),
  20 => 
  array (
    'name' => 'Filesystem Plugin
 Testing repository : Common Files',
    'result' => true,
    'level' => 'error',
    'info' => '',
  ),
  21 => 
  array (
    'name' => 'Filesystem Plugin
 Testing repository : My Files',
    'result' => true,
    'level' => 'error',
    'info' => '',
  ),
); ?>