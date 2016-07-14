<?php
/**
 * Handles MySQL database connections
 *
 * Contains functions to establish, check and destroy MySQL database connections. Also conatains functions to retrieve data from the database with in built sanitization. 
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

function vp_mysql_connect() {
    /**
    * Connects to the MySQL database defined in settings.php
    * @return the MySQL server connection as an object
    */
    
    //First: check we're set up to use MySQL and this hasn't been called by mistake. Also check to see if all the relevant information is in place.
    if (DB_BACKEND != mysql) {
        echo VP_ERR[0][1]
    }
    
}

function vp_mysql_query($query) {
    /**
    * Check database parameters exist and use them to connect to the database.
    * @param string   $table        The name of the table to backup
    * @param string   $backup_table The name of the backup table for this table
    * @return resource -the request handle to the table creation query
    */
}

function vp_mysql_destroy
    
?>