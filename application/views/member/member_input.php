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
echo form_open('member/input_simpan');

?>

	<form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Member</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Member">
        </div>
			
		<div class="form-group">
          <label for="exampleInputEmail1">Umur Member</label>
          <input type="text" class="form-control" name="umur" placeholder="Masukan Umur Member">
        </div>
        <div class="form-group">
        	<label for="exampleInputEmail1">Jenis Kelamin Member</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" checked="">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="optionsRadios2" value="Perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>
		<div class="form-group">
          <label for="exampleInputEmail1">No Telp Member</label>
          <input type="text" class="form-control" name="tlp" placeholder="Masukan No telp Member">
        </div>
		<div class="form-group">
          <label for="exampleInputEmail1">Alamat Member</label>
          <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Member">
        </div>
		<div class="form-group">
          <label for="exampleInputEmail1">Email Member</label>
          <input type="text" class="form-control" name="email" placeholder="Masukan Email Member">
        </div>
		
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" ata-toggle="modal" data-target="#myModal" data-whatever="@getbootstrap">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


<?php echo form_close();?>

