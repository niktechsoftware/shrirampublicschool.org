<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function aboutus()
	{
		$this->load->view('aboutus');
	}
	
	public function newsticker(){
		$this->load->view("newsticker");
	}
	
	public function academics(){
		$this->load->view("academics");
	}
	public function academicProcess(){
		$this->load->view("academicProcess");
	}
	public function cbseCurriculam(){
		$this->load->view("cbseCurriculam");
	}
	public function highlight(){
		$this->load->view("highlight");
	}
	public function faculty(){
		$this->load->view("faculty");
	}
	public function facilities(){
		$this->load->view("facilities");
	}
	public function medical(){
		$this->load->view("medical");
	}
	public function transport(){
		$this->load->view("transport");
	}
	public function library(){
		$this->load->view("library");
	}
	public function playGround(){
		$this->load->view("playGround");
	}
	public function avRoom(){
		$this->load->view("avRoom");
	}
	public function admission(){
		$this->load->view("admission");
	}
	public function gallery(){
		$this->load->view("gallery");
	}
	public function contactUs(){
		$this->load->view("contactUs");
	}
	public function Activity(){
		$this->load->view("Activity");
	}
	public function achievement(){
		$this->load->view("achievement");
	}
	
	public function goal(){
		$this->load->view("goal");
	}
	public function co_curriAct(){
		$this->load->view("co_curriAct");
	}
	public function mornAssembly(){
		$this->load->view("mornAssembly");
	}
	public function schoolUniforms(){
		$this->load->view("schoolUniforms");
	}
	
	public function news(){
		$this->load->view("news");
	}
	public function groupSystem(){
		$this->load->view("groupSystem");
	}
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */