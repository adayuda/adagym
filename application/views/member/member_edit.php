<?php $this->load->view('header_in');?>

        

   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
<?php $this->load->helper('form');?>
<?php echo form_open('member/edit_simpan');?>
<?php echo form_hidden('id', $this->session->userdata('ses_id'));?>

	<table>
		<tr>
			<td>Nama Member</td>
			<td><?php echo form_input('nama',$get_data['nama']);?></td>
		</tr>	
		<tr>	 
			<td>Umur Member</td>
			<td><?php echo form_input('umur',$get_data['umur']);?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php
				echo form_radio('jk','Perempuan').'Perempuan'.
				form_radio('jk','Laki-Laki').'Laki-Laki';
				
			?></td>
		</tr>
		<tr>	
			<td>No Telp</td>
			<td><?php echo form_input('tlp',$get_data['no_telp']);?></td>
		</tr>
		<tr>	
			<td>Alamat Member</td>
			<td><?php echo form_input('alamat',$get_data['alamat']);?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo form_input('email',$get_data['email']);?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo form_input('username',$get_data['username']);?></td>
		</tr>
		<tr>
			<td>
				<?php 
				echo form_submit('submit','Simpan');
				// echo anchor('member','view member'); 
				?>
			</td>
		</tr>
	</table>

<?php echo form_close()?>