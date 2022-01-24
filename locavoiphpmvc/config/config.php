<?php
// on définit des constantes de configuration
$modifFILE = str_replace('\config', '', dirname(__FILE__));
define('SITE_ROOT', $modifFILE);
define('BASE_FOLDER', '/locavoiphpmvc');
define('SCRIPT_ROOT', 'http://localhost/locavoiphpmvc');
define('IS_ONLINE', false);

?>