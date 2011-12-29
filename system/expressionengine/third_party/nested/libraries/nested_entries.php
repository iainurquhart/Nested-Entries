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
    	
    	// we can do a bunch of stuff here to modify the nested:entries tag too, 
    	// for example fetch child entries of the parent entry in Taxonomy *cough*
    	
    	// $this->EE->TMPL->tagparams['fixed_order'] = $child_ids;
    	// $this->EE->TMPL->tagparams['limit'] = '1';

		return parent::entries();

    } 
 
}