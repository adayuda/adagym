<?php $this->load->helper('form');?> 
<?php echo form_open('daftar/input_simpan');?>
<!-- <?php echo form_hidden('id',$this->session->userdata('ses_id'));?> -->


 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css')?>">
	

<table>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Kode Member</label>
          <input type="text" class="form-control" name="kode" value="<?php echo $this->session->flashdata('newid'); ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Daftar</label>
          <input type="date" class="form-control" name="tgl" placeholder="Masukan Kode Member">
        </div>
    <div class="form-group">
          <label for="exampleInputEmail1">Harga Daftar</label>
          <?php
            foreach ($this->session->flashdata('newharga') as $a) {
              echo "<input type='text' class='form-control' name='harga' value='". $a->harga_daftar ."'>";
            }
          ?>
        </div>

    <tr>
      <td>
        <?php 
        echo form_submit('submit','Simpan');
        ?>
      </td>
    </tr>
  </table>  