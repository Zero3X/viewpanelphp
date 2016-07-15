<?php
/**
 * Loads language localisation
 *
 * Contains functions to load local language translations and implement them throughout View Panel.
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

function vp_load_localisation() {
    /**
    * Loads the language defined in settings.php
    * @return every translation as an array in the format: 
    */
    
    $localfile = file_get_contents("translations/" + VP_LOCALISATION + ".json");
    $json_a = json_decode($string, true);
}

function vp_error($code) {
    
}

function vp_mysql_error($code) {
    
}

function vp_http_error($code) {
    
} 
?>