<?php $this->load->view('header');?>

  <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js'); ?>"></script> 
  <script type="text/javascript" src="<?php echo base_url('assets/jquery/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.all.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script> 
  

    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css');?>">

    <style>
        .tbl>thead>tr>th, .tbl>tbody>tr>th, .tbl>tfoot>tr>th, .tbl>thead>tr>td, .tbl>tbody>tr>td, .tbl>tfoot>tr>td {
            border-top: 0;
        }
        .autocomplete-suggestions { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: 1px solid #999; background: #FFF; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
        .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
        .autocomplete-no-suggestion { padding: 2px 5px;}
        .autocomplete-selected { background: #F0F0F0; }
        .autocomplete-suggestions strong { font-weight: bold; color: #000; }
        .autocomplete-group { padding: 2px 5px; font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
    </style>

    <style>
        input[type='number'] {
          -mox-appearance:textfield;
        }

        input[type=number] :: -webkit-outer-spin-button,
        input[type=number] :: -webkit-inner-spin-button {
          -webkit-appearance: none;
          margin        : 0;
        }

        input[type='number']:hover,
        input[type='number']:focus {
          -moz-apperance: number-input;
        }
    </style>

    <script>
      $('document').ready(function() {
        $('#kode_barang').on('keypress', function(e) {
          if (e.which == 13) {
            var newkode = $('#kode_barang').val();

            if (newkode == "") {
              $('#setBayar').focus();
            }
            else {
              $('#qty_barang').focus();
            }
          }
        });

        $('#qty_barang').on('keypress', function(e) {
          var newkode = $('#kode_barang').val();
          var qty     = $('#qty_barang').val();

          if (e.which == 13) {
            $.ajax({
              type    : 'post',
              url     : '<?php echo site_url();?>penjualan/getBarang',
              // data    : "kd_barang=" + newkode + ",qty_barang=" + qty,
              data    : {
                kd_barang : newkode, qty_barang : qty
              },
              success : function(data) {
                $('#kode_barang').val("");
                $('#qty_barang').val("");

                var a = JSON.parse(data);

                $('#listbarang').load('<?php echo site_url();?>/penjualan/list');
                $('#setTotal').val(a);

                $('#kode_barang').focus();
              }
            });
          }
        });
      });
    </script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Main Header -->
  <!--  --><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FORM TRANSAKSI
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
       <div class="box">
           <!-- <form action="" method="post"> -->
                <div class="box-header">
                    <div class="col-sm-5">
                        <table class="table tbl">
                                <tr>
                                    <td>Nama Gym</td>
                                    <td>
                                        <input type="text" name="nama_gym" class="form-control" value="<?php echo $this->session->userdata('ses_nama'); ?>" readonly>
                                        <input type="hidden" name="kd_gym" class="form-control" value="">
                                    </td>
                                    <td>Tanggal</td>
                                    <td><input type="text" name="Tanggal" class="form-control" value="<?php echo date('d M Y'); ?>" readonly></td>
                                </tr>
                            </table>
                    </div>
                    <div class="col-sm-7" style="padding-top : 9">
                      <!-- <form action="" method="POST"> -->
                        <p id="Total" class="text-right" style="font-size: 100px;">
                            <input type="number" name="kode_barang" id="kode_barang" class="form-control input-bg" style="height : 70px; font-size : 45pt" maxlength="15"/>
                        </p>
                        <p id="Total" class="text-right" style="font-size: 100px;">
                            <input type="text" name="qty_barang" id="qty_barang" class="form-control input-bg" style="height : 70px; font-size : 45pt; width:30%" maxlength="5"/>
                        </p>
                      <!-- </form> -->
                    </div>
                </div>
                <!-- /.box-header -->
               
                <!-- /.box-body -->
                

                <div id="listbarang"></div>
            <!-- </form> -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
 
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
<?php $this->load->view('footer');?>