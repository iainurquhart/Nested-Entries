<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(PATH_MOD.'channel/mod.channel.php');
 
class Nested_entries extends Channel {

     
    // -----------------------------------------------------------------
     
    /**
     * Constructor function
     */
    function __construct() {
    	
        parent::Channel();

    }
     
    // -----------------------------------------------------------------
     
    /**
     * entries
     * 
     * @return string 
     */
    public function entries() {

		return parent::entries();

    } 
 
}