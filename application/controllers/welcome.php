<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->home();
	}

	public function home(){
		$this->load->view('header');
		$this->load->view('map_view');
		$this->load->view('footer');
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
