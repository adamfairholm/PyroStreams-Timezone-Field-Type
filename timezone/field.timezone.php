<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Timezone Field Type
 *
 * @package		PyroStreams
 * @author		Parse19
 * @copyright	Copyright (c) 2011, Parse19
 * @license		http://parse19.com/pyrostreams/license
 * @link		http://parse19.com/pyrostreams
 */
class Field_timezone
{
	public $field_type_name 			= 'Timezone';
	
	public $field_type_slug			= 'timezone';
	
	public $db_col_type				= 'varchar';

	// --------------------------------------------------------------------------
	
	public function __construct()
	{
		$this->CI =& get_instance();
		
		$this->CI->load->helper('date');
	}
	
	// --------------------------------------------------------------------------

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output( $data )
	{
		return timezone_menu($data['value'], '', $data['form_slug']);
	}

	// --------------------------------------------------------------------------

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function pre_output( $input )
	{
		if( !$input ):

			return;

		endif;
		
		$this->CI->load->language( 'date' );
		
		return $this->CI->lang->line( $input );
	}

}

/* End of file field.timezone.php */