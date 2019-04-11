<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Dashboard');
		$this->commonTemplate($data);
		$this->load->view('index');			
	}

	public function commonTemplate($data){
		$this->load->view('common/head',['data'=>$data]);
		$this->load->view('common/header_menu');
		$this->load->view('common/sidebar');
	}

	/*ui elements*/
	public function typo(){
		$data=array('title'=>'Typography');
		$this->commonTemplate($data);
		$this->load->view('ui/typography');	
	}

	public function glyphicon(){
		$data=array('title'=>'Glyphicons');
		$this->commonTemplate($data);
		$this->load->view('ui/glyphicon');	
	}

	public function grids(){
		$data=array('title'=>'Grids');
		$this->commonTemplate($data);
		$this->load->view('ui/grids');	
	}
	

	/*font awesome*/
	public function fontawesome(){
		$data=array('title'=>'Fontawesome');
		$this->commonTemplate($data);
		$this->load->view('fontawesome');	
	}

	/*tables*/
	public function basicTable(){
		$data=array('title'=>'Basic Tables');
		$this->commonTemplate($data);
		$this->load->view('tables/basic');	
	}

	public function responsiveTable(){
		$data=array('title'=>'Responsive Tables');
		$this->commonTemplate($data);
		$this->load->view('tables/responsive');	
	}


	/*form components*/
	public function frmValidations(){
		$data=array('title'=>'Form Validations');
		$this->commonTemplate($data);
		$this->load->view('form/validation');	
	}

	public function frmComponent(){
		$data=array('title'=>'Form Components');
		$this->commonTemplate($data);
		$this->load->view('form/component');	
	}

	public function dropZone(){
		$data=array('title'=>'DropZone');
		$this->commonTemplate($data);
		$this->load->view('form/dropzone');	
	}


	/*mail*/
	public function inbox(){
		$data=array('title'=>'Mail Inbox');
		$this->commonTemplate($data);
		$this->load->view('mail/mail');
	}

	public function compose(){
		$data=array('title'=>'Compose Mail');
		$this->commonTemplate($data);
		$this->load->view('mail/compose');
	}


	/*charts*/
	public function chartJs(){
		$data=array('title'=>'Chart JS','hasCharts'=>TRUE);
		$this->commonTemplate($data);
		$this->load->view('charts/chartjs');
	}

	public function flotChart(){
		$data=array('title'=>'Float Charts');
		$this->commonTemplate($data);
		$this->load->view('charts/flot');
	}
	/*maps*/
	public function googleMap(){
		$data=array('title'=>'Google Map');
		$this->commonTemplate($data);
		$this->load->view('maps/gmap');	
	}
	public function vectorMap(){
		$data=array('title'=>'Vector Map','hasVmap'=>TRUE);
		$this->commonTemplate($data);
		$this->load->view('maps/vmap');
	}

	/*extra*/
	public function gallery(){
		$data=array('title'=>'Gallery');
		$this->commonTemplate($data);
		$this->load->view('extra/gallery');	
	}
	public function errorPg(){
		$data=array('title'=>'404 Error');
		$this->load->view('common/head',['data'=>$data]);
		$this->load->view('common/header_menu');
		$this->load->view('extra/404.php');
	}
	public function registration(){
		$data=array('title'=>'Registration');
		$this->commonTemplate($data);
		$this->load->view('extra/registration');	
	}
	public function login(){
		$data=array('title'=>'Login');
		$this->load->view('extra/login',['data'=>$data]);	
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
?>