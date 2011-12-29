<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Nested Entries Module Front End File
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Module
 * @author		Iain Urquhart
 * @link		http://iain.co.nz
 */

class Nested {
	
	public $return_data;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
	}
	
	// ----------------------------------------------------------------

	public function entries()
	{

		$this->EE->load->library('nested_entries');
		return $this->EE->nested_entries->entries();
	
	}
	
	public function prep_vars()
	{
		$prefix = $this->EE->TMPL->tagparams['var_prefix'];
		return str_replace($prefix, '', $this->EE->TMPL->tagdata);

	}
	
}
/* End of file mod.nested.php */
/* Location: /system/expressionengine/third_party/nested/mod.nested.php */