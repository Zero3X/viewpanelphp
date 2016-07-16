<?php
/**
 * Settings File
 *
 * Contains all global settings for View Panel as well as inbuilt error checking functions.
 *
 * PHP version 5
 *
 * LICENSE: See LICENSE.md
 *
 * @package    viewpanelphp
 * @author     Al Wilde http://alwilde.com
 * @copyright  2009-2016 Al Wilde
 * @license    see LICENSE.md
 * @version    3.0.1
 */

//DB SETTINGS
define("DB_BACKEND", "mysql");
define("DB_HOST", "localhost");
define("DB_USER", "username");
define("DB_PASS", "password");
define("DB_NAME", "tablename");

//Language (localisation) option
define("VP_LOCALISATION", "engb");

//THEME SETTINGS
define("VP_THEME", "theme");

//VIEW PANEL SETTINGS (probably a good idea not to edit these)
define("VP_VERSION", 301);
define("VP_VERSION_FRIENDLY", "3.0.1 'Liberty'");
define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT']);
define("CORE_DIR", "core/");

//VIEW PANEL ERROR CHECKING AND DEBUGGING
define("VP_SETTINGS_CHECK", true);
define("VP_DEBUGGING", "ECHO"); //ECHO (To page), LOG (to .txt file), CONSOLE (to developer console) or OFF.
define("VP_DEBUGGING_LEVEL", "ALL"); //ALL (Output everything), ERROR (Just errors)
define("VP_DIE_ON_FATAL", true);
define("VP_DIE_ON_ERROR", true);
define("VP_DIE_ON_WARN", false);

//Inbuilt error checking used to verify settings are correct
if (VP_SETTINGS_CHECK == true) {
    if (
        !defined("DB_BACKEND") and 
        !defined("DB_HOST") and 
        !defined("DB_USER") and
        !defined("DB_PASS") and
        !defined("DB_NAME") and
        !defined("VP_LOCALISATION") and
        !defined("VP_LOCALISATION") and
        !defined("VP_THEME") and
        !defined("VP_VERSION") and
        !defined("VP_VERSION_FRIENDLY") and 
        !defined("VP_DEBUGGING") and 
        !defined("VP_DEBUGGING_LEVEL")
    ) {
        die("Fatal Error 300: Something isn't set correctly. Please check settings file.");
    }
} 
?>
