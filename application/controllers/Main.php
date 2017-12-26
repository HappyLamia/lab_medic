<?php 	
	error_reporting(1);
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Main extends CI_Controller
	{
		public function index()
		{
			$this->load->view('html/error_404');
		}
		function view($url='',$sub_url='',$param='',$param2='')
		{
			$template = 'dark';
			if ($this->session->userdata('lab_logged_in')) 
			{
				if ($url=="pasien") {
					$data['page'] = $template.'/v_pasien';
				}
				elseif ($url=="obat") {
				 	$data['page'] = $template.'/v_obat';
				} 
				else {
					$data['page'] = $template.'/v_dashboard';
				}
				$data['bio'] = get_bio('user');
				$page = $template.'/v_home';
				$this->load->view($page,$data);
			}
			else{
				$data['alert'] = get_alert('login_alert');
				$login = $template.'/v_login';
				$this->load->view($login,$data);
			}
			
		}
	}
?>