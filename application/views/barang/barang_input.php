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
echo form_open('barang/addbarang');

?>

	<form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Kode barang</label>
          <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Barang">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama barang</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Barang">
        </div>
			
		    <div class="form-group">
          <label for="exampleInputEmail1">Harga barang</label>
          <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Barang">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Stok barang</label>
          <input type="text" class="form-control" name="stok" placeholder="Masukan Stok Barang">
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
