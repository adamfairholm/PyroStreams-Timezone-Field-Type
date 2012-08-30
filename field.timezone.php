<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Timezone Field Type
 *
 * @author		Adam Fairholm
 * @copyright	Copyright (c) 2011-2012, Adam Fairholm
 * @license		MIT
 * @link		https://github.com/adamfairholm/PyroStreams-Timezone-Field-Type
 */
class Field_timezone
{
	public $field_type_name 		= 'Timezone';
	
	public $field_type_slug			= 'timezone';
	
	public $db_col_type				= 'varchar';

	public $version					= '1.1';

	public $author					= array(
										'name' => 'Adam Fairholm',
										'url' => 'http://www.adamfairholm.com');
	
	// --------------------------------------------------------------------------

	/**
	 * Output form input
	 *
	 * @access 	public
	 * @param	array
	 * @return	string
	 */
	public function form_output($data, $entry_id, $field)
	{
		$this->CI->load->helper('date');
		$this->CI->lang->load('date');

		$choices = array();

		if ($field->is_required != 'yes')
		{
			$choices[null] = '---';
		}

		foreach (timezones() as $key => $val)
		{
			$choices[$key] = $this->CI->lang->line($key);
		}

		return form_dropdown($data['form_slug'], $choices, $data['value']);
	}

	// --------------------------------------------------------------------------

	/**
	 * Output array for plugins
	 *
	 * @access 	public
	 * @param	string
	 * @return	array
	 */
	public function pre_output_plugin($input)
	{
		if ( ! $input) return null;
		
		$this->CI->load->helper('date');
		$this->CI->load->language('date');

		return array('code' => $input, 'name' => $this->CI->lang->line($input));
	}

}