<?php
/**
 * 
 */
class Profil extends Ci_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	}

	function edit_profil(){
	    // function ini hanya boleh diakses oleh op 
	    if($this->session->userdata('akses')=='3'){
	    	
	    	$this->load->model('m_member');
	    	$kd_member = $this->session->userdata('ses_id');
 			$data['get_data'] =  $this->m_member->get_data($kd_member);
	      	$this->load->view('member/member_edit',$data);


	    }
	     if($this->session->userdata('akses')=='2'){

	    	$this->load->model('m_gym');
	    	$kd_gym = $this->session->userdata('ses_id');
	 		$data['get_data'] =  $this->m_gym->get_data($kd_gym);
	 		$this->load->view('gym/gym_edit',$data);
	    	
	    }
	    

	  }


}

?>