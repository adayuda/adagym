<?php $this->load->view('header_in');?>

        

   <section class="content">
      <div class="row">
        <!-- left column --> 
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>

<?php 
$this->load->helper('form');
echo form_open('gym/edit_simpan');

?>
<?php echo form_hidden('id',$this->session->userdata('ses_id'));?>
 <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama GYM</label>
					<td><?php echo form_input('nama',$get_data['nama']);?></td>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Alamat GYM</label>
					<td><?php echo form_input('alamat',$get_data['alamat']);?></td>
				</div>
 				<div class="form-group">
					<label for="exampleInputEmail1">No Telp GYM</label>
					<td><?php echo form_input('tlp',$get_data['no_telp']);?></td>
				</div>
 					<div class="form-group">
					<label for="exampleInputEmail1">Email GYM</label>
					<td><?php echo form_input('email',$get_data['email']);?></td>
				</div>
			<td>
				<?php 
				echo form_submit('submit','Simpan');
				// echo anchor('member','view member'); 
				?>
			</td>
		</tr>
	</table>

<?php echo form_close()?>