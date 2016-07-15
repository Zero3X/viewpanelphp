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

function vp_load_localisation($force=null) {
    /**
    * Loads the language defined in settings.php
    * @return every translation as an array in the format: [ERR_TYPE][code][text] or [VP_LOC][Word]
    */
    if ($force == null) {
        $translationfile = CORE_DIR . "translations/" . VP_LOCALISATION . ".json";
    } else {
        $translationfile = CORE_DIR . "translations/" . $force . ".json";
    }
        $localfile = file_get_contents($translationfile);

        if($localfile) {
            return $jsonarray = json_decode($localfile, true);
        } else {
            return false;
        }  
}
?>