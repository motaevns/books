<?php if (!defined('BASEPATH')) die();

class Frontpage extends CI_Controller
{

   public function index()
	{
      $this->load->database();
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
