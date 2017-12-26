<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	if ( ! function_exists('user'))
	{
		function get_user()
		{
			$CI = & get_instance();  //get instance, access the CI superobject
			$username = $CI->session->userdata('username');
			return $username;
		}
		function get_bio($table_name)
		{
			$CI = & get_instance();  //get instance, access the CI superobject
			$data = array('username'=>get_user());
			$x = $CI->db->get_where($table_name,$data);
			return $x->row();
		}
	}
?>