<?php $this->load->view('header_edit');?>

        

   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>

<?php $this->load->helper('form');?>
<?php echo form_open('paket/edit_simpan');?>
<?php echo form_hidden('kd_paket',$this->uri->segment(3));?>

	
	
	  <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Package</label>
		  <td><?php echo form_input('nama',$get_data['nama']);?></td>
		</div>

		<div class="form-group">
          <label for="exampleInputEmail1">Harga Package</label>
		  <td><?php echo form_input('harga',$get_data['harga']);?></td>
		</div>

		<div class="form-group">
          <label for="exampleInputEmail1">Lama Package</label>
		  <td><?php echo form_input('lama',$get_data['lama']);?></td>
		</div>
			<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
<?php echo form_close()?>
<?php $this->load->view('footer');?>
