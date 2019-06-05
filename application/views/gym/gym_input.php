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
echo form_open('gym/input_simpan');

?>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama GYM</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Gym">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat GYM</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Gym">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telp</label>
                  <input type="text" class="form-control" name="tlp" placeholder="Masukan No Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         