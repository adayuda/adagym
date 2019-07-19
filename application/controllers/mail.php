<?php
	class mail extends CI_Controller{
		
		function kirim_email($email){
			
	        // Konfigurasi email.
	        $config = [
	               'useragent' => 'CodeIgniter',
	               'protocol'  => 'smtp',
	               'mailpath'  => '/usr/sbin/sendmail',
	               'smtp_host' => 'ssl://smtp.gmail.com',
	               'smtp_user' => 'putuyudapradnyana@gmail.com',   // Ganti dengan email gmail Anda.
	               'smtp_pass' => 'tuyuda1998',             // Password gmail Anda.
	               'smtp_port' => 465,
	               'smtp_keepalive' => TRUE,
	               'smtp_crypto' => 'SSL',
	               'wordwrap'  => TRUE,
	               'wrapchars' => 80,
	               'mailtype'  => 'html',
	               'charset'   => 'utf-8',
	               'validate'  => TRUE,
	               'crlf'      => "\r\n",
	               'newline'   => "\r\n",
	           ];
	 
	        // Load library email dan konfigurasinya.
	        $this->load->library('email', $config);
	 
	        // Pengirim dan penerima email.
	        $this->email->from('putuyudapradnyana@gmail.com');    // Email dan nama pegirim.
	        $this->email->to($email);                       // Penerima email.
	 
	        // Lampiran email. Isi dengan url/path file.
	        $this->email->attach('');
	 
	        // Subject email.
	        $this->email->subject('Kirim Email pada CodeIgniter');
	 
	        // Isi email. Bisa dengan format html.
	        $this->email->message('masuk kah?');
	 
	        if ($this->email->send())
	        {
	            echo 'Sukses! email berhasil dikirim.';
	        }
	        else
	        {
	            echo 'Error! email tidak dapat dikirim.';
	        }
	    }
	}
?>