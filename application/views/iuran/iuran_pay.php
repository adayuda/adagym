
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php $this->load->view('header');?> 

  <!--  -->
  <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1>Data Iuran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Data Iuran </li>
                            <li class="active">Form Iuran</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<!--  -->
      <!-- /.sidebar-menu -->
        
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
       <div class="box">
           
          <?php 
			$this->load->helper('form');
			echo form_open('iuran/input_pay');
      
			?>
                <div class="box-header">

                    <div class="col-sm-5">
                        <table class="table tbl">
                                <tr>
                                    <td>Kode Member</td>
                                    <td>
                                        <input type="text" name="kode" id="newkdmember" class="form-control" value="<?php echo $this->uri->segment(3);  ?>" readonly>
                                       
                                    </td>
                               </tr>
                            </table>
                    </div>
                    <!-- <div class="col-sm-7">
                        <p id="Total" class="text-right" style="font-size: 100px;">0</p>
                    </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="col-lg-12 style-col pad">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Pilih Paket</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Tanggal Aktif</th>
                                    <th>Harga</th>
                                   <!--  <th>Diskon (%)</th> -->
                                    <th>Sub Total</th>
                                </thead>

                                <tbody>
                                    <tr >
                                        <td>1</td>
                                        <td><select id="paketcangg" data-placeholder="Pilih Package..." ul class="chosen-choices  " tabindex="1" name="paket" >
						                    <option value="0">pilih package</option>
						                    <?php 
						        				foreach($paket as $p){
						        					echo " <option value=". $p['kd_paket'].">".$p['nama_paket']."</option>";	
						        				}
						                    ?>
						                   
						                    
						                </select></td>
                                        	<td><input type="text" name="tgl_awal" class="form-control input-bg id-JL" value="<?php echo date('Y-m-d');?>"></td>

                                       		<td><input type="date" id="tglsuud" name="tgl_akhir" step="0.1" class="form-control input-bg"  required></td>

                                        	<td><input id="hargacng" type="number" name="harga-paket" class="form-control input-bg" readonly required></td>
                                       
                                        <td><input type="number" id="setTotal" name="total" class="form-control input-bg" readonly ></td>
                                    </tr>
                                     <tr>
                                          <td colspan="4"><p align="right">Bayar</p></td>
                                          <td colspan="2"><input type="text" name="total" id="setBayar" style="width:100%;font-size:30;"></td>
                                      </tr>
                                      <tr>
                                          <td colspan="4"><p align="right">Kembalian</p></td>
                                          <td colspan="2"><input type="text" name="total" id="setKembalian" style="width:100%;font-size:30;" readonly></td>
                                      </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <!-- <button type="button" data-toggle="modal" data-title="view" data-target="#tmpl_jl" class="btn btn-info" onclick="viewInfoJL()">Lihat Data Jenis Laundry</button> --> 
                                 
                            </div>
                        </div>
				<?php echo form_close();?>
                    </div>
                </div>
                <!-- /.box-body -->
     

            </form>
            
          </div>
          <!-- /.box --> 
        
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
  

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<script type="text/javascript">
  $('document').ready(function() {
    $('#paketcangg').change(function() {
      var kdpaket = $(this).val();
      console.log("databerubah");
      $.ajax({
        url: '<?=base_url('iuran/get_data')?>',
        type: 'POST',
        dataType: 'json',
        data: {kdpkt: kdpaket},
        success:function(get){
            var getlama = parseInt(get[0].lama);
            
            var now     = new Date();
 
            var day     = ("0" + now.getDate()).slice(-2);
            var month   = ("0" + (now.getMonth() + 1)).slice(-2);

            now.setMonth(now.getMonth() + 1);
            newmonth = ("0" + (now.getMonth() + getlama)).slice(-2);

            var today   = now.getFullYear()+"-"+(newmonth).slice(-2)+"-"+(day) ;

            $('#tglsuud').val(today);
            console.log(get);
            console.log(kdpaket);
            $("#hargacng").val(get[0].harga);
             var hargacng =parseInt($("#hargacng").val());
             var total = hargacng ;
             $("#setTotal").val(total);

            $('#setBayar').focus();

        }
      })
      
    });
  });
</script>
<script>
   $('document').ready(function() {
    $('#setBayar').on('keypress', function(e) {
        if(e.which == 13) {
            var kembalian = $('#setBayar').val() - $('#setTotal').val();

            $('#setKembalian').val(kembalian);

            var a = $('#newkdiuran').val();
            var b = $('#tglsuud').val();
            var c = $('#hargacng').val();
            var d = $('#newkdmember').val();
            var g = $('#paketcangg').val();

            // alert(g);

            $.ajax({
                type    : 'post',
                url     : '<?php echo site_url()?>iuran/input_pay',
                data    : {
                  kd_iuran    : a, 
                  tgl_akhir   : b, 
                  harga_paket : c, 
                  kode        : d, 
                  paket       : g
                },
                success : function(data) {
                  
                  Swal.fire({
                    text: "Member membeli paket",
                    type: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value) {
                      window.location.href = "<?php echo site_url('iuran/index'); ?>";
                    }
                  })
                }
            });
        }
      });
    });
</script>



<?php $this->load->view('footer');?>