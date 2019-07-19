<?php
 	class page extends CI_Controller{
		function __construct(){  
	    parent::__construct();
	    //validasi jika user belum login
	    if($this->session->userdata('masuk') != TRUE){
				$url=base_url();
				redirect($url);
			}
	  }

	  function index(){
	      $this->load->view('dashboard');
	  }
	  
	  function dashboard_admin(){
	    $this->load->view('dashboard_admin');
	  }

	  function data_op(){
	    // function ini hanya boleh diakses oleh op 
	    if($this->session->userdata('akses')=='1'){
	      $this->load->view('operator_view');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }

	  }

	  function data_gym(){
	    // function ini hanya boleh diakses oleh op dan gym
	    if($this->session->userdata('akses')=='1' ){
	      redirect('gym');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }

	  function data_member(){
	    // function ini hanya boleh diakses oleh gym dan member
	    if($this->session->userdata('akses')=='2'){
	      redirect('member');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }
	 
	  function data_iuran(){
	    // function ini hanya boleh diakses oleh gym dan member
	    if($this->session->userdata('akses')=='2'){
	      redirect('iuran');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }
	  function data_paket(){
	    // function ini hanya boleh diakses oleh gym dan member
	    if($this->session->userdata('akses')=='2'){
	      redirect('paket');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }
	  function data_barang(){
	    // function ini hanya boleh diakses oleh gym dan member
	    if($this->session->userdata('akses')=='2'){
	     redirect('barang');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }
	   function data_penjualan(){
	    // function ini hanya boleh diakses oleh gym dan member
	    if($this->session->userdata('akses')=='2'){
	     redirect('penjualan');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }
	  function iuran_member(){
	  	if($this->session->userdata('akses')=='3'){
	     redirect('iuran/member');
	    }else{		
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	  }

	  function lap_iuran(){
		if($this->session->userdata('akses')=='2'){
			redirect('iuran/laporan');
		   }else{		
			 echo "Anda tidak berhak mengakses halaman ini";
		   } 
	  }
	  function pembayaran(){
		if($this->session->userdata('akses')=='2'){
			redirect('Buktibayar');
		   }else{		
			 echo "Anda tidak berhak mengakses halaman ini";
		   } 
	  }

	}

	
?>
