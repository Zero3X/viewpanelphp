<?php
/**
 * Compiles the various core modules and plugins and displays them. Lots of business logic. 
 *
 * Takes all the core modules from /core/ and executes all that should be. Core modules will then load plugins. 
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
//Load all the core modules
require_once("core/lang.php");             //So we can handle errors in the user's native language
require_once("settings.php");              //Settings come next   
require_once("core/debug.php");
require_once("core/mysql.php");   //Load the correct database backend as defined in settings
require_once("core/users.php");            //The user module comes next 
require_once("core/plugins.php");          //Load the plugins module about now
require_once("core/navigation.php");       //Navigational functions
require_once("core/theme.php");            //Load in themes


vp_load_localisation();
vp_mysql_connect();
?>