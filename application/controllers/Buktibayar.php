<?php
class Buktibayar extends Ci_Controller{
    function __construct(){
        parent::__construct();
        $this->akses=$this->session->userdata('akses');
        $this->load->library('upload'); 
        $this->load->model('m_daftar','d');
    }
    function index(){
        if($this->akses==2){
			// $data['bayar'] = $this->d->dataBayar()->result();
            // $this->load->view('home/bayar_view',$data);
            $this->load->view('home/test_bayar');
			}else{ 
			print_r('error');
			}	
    }
    public function showAllBukbar() {
        $gym = $this->session->userdata('ses_id');
        echo json_encode($this->d->dataBayar($gym));
    }
	function addbukbar(){
        $config['upload_path'] = './assets/gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; //Allowing types
        $config['encrypt_name'] = TRUE; //encrypt file name 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
 
                $data   = $this->upload->data();
				$image  = $data['file_name']; //get file name
				$id		= $this->input->post('id'); 
				$rek 	= $this->input->post('nama_rek');
				$bank	= $this->input->post('nama_bank');
				$total 	= $this->input->post('total');
				//echo $bank;
				$this->load->model('m_member','m');
                $this->m->addSaveBukbar($image,$id, $rek,$bank,$total);
                echo "Upload Successful";
 
            }else{
                echo "Upload failed. Image file must be gif|jpg|png|jpeg";
            }
                      
        }else{
            echo "Failed, Image file is empty.";
        }
                 
    }
    function acc(){
    //    kddaf = $this->uri->segment(3);
      echo json_encode($this->d->accSave()); 
       
    }
}
?>