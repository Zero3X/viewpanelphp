<?php
//DB SETTINGS
define("DB_BACKEND", "mysql");
define("DB_HOST", "localhost");
define("DB_USER", "username");
define("DB_PASS", "password");
define("DB_NAME", "tablename");

//Language (localisation) option
define("VP_LOCALISATION", "engb");

//ERROR HANDLING LOCALISATION
define("LOCAL_MYSQL_ERR", true);
define("LOCAL_PHP_ERR", true);
define("LOCAL_HTML_ERR", true);
define("LOCAL_VP_ERR", true);

//THEME SETTINGS
define("VP_THEME", "theme");

//VIEW PANEL SETTINGS (probably a good idea not to edit these)
define("CURRENT_PAGE", $_GET['p']);
define("PREVIOUS_PAGE", null);
define("CURRENT_ACTION", $_GET['a']);
define("PREVIOUS_ACTION", null);
define("VP_VERSION", 301);
define("VP_VERSION_FRIENDLY", "3.0.1 'Liberty' RC1");
?>
