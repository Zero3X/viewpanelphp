<?php
/**
 * Debug functions
 *
 * Contains functions to display and log errors and warnings.
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

function vp_error($code) {
    /**
    * Uses a loaded language file to display a View Panel error in a local language. Error output is controlled by settings.php
    * @param int   $code        The number of the View Panel error code
    * @return true if error has been processed correctly, false if something went wrong handling the error
    */
    
    //Let's dig out our error:
    $error = vp_load_localisation();
    
    if (!$error) {
        //Oh dear, it appears loading the localisation file failed so we can't ouput the error in a local language. 
        //In that case let's try and force loading engb 
        $error = vp_load_localisation("engb");
        if (!$error) {
            //Forcing engb didn't work. Kill everything.
            echo "<p>vp_error was triggered after a code " . $code . " (this code may or may not be valid).</p>";
            echo "<p>vp_error failed to execute due to:</p>";
            echo "<p>Warning 302: Could not load localisation file defined in settings. Forcing engb.</p>";
            die("<p>Fatal Error 303: Loading engb localisation file failed.</p>");
        }
    }
    
    
    
    $error = $error["VP_ERR"][$code]["text"];
    if (VP_DEBUGGING == "ECHO") {
        echo $error;
        return true;
    }
        
}

function vp_mysql_error($code) {
    
}

function vp_http_error($code) {
    
} 

?>