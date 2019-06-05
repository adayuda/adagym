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
echo form_open('paket/input_simpan');

?> 

	<form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Package</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Package">
        </div>
			
		<div class="form-group">
          <label for="exampleInputEmail1">Harga Package</label>
          <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Package">
        </div>
        
		</div>
    <div class="form-group">
          <label for="exampleInputEmail1">Lama Package</label>
          <input type="text" class="form-control" name="lama" placeholder="Masukan Harga Package">
        </div>
        
    </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


<?php echo form_close()?>
