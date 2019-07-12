<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>adaGYM</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap-responsive.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/prettyPhoto.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/flexslider.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/custom-styles.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/jquery.steps/css/jquery.steps.css');?>">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/style-ie.css');?>"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url('assets/home/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/jquery.steps/js/jquery.steps.js');?>"></script>
<script src="<?php echo base_url('assets/parsley.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.prettyPhoto.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.flexslider.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.custom.js');?>"></script>
</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="../../assets/adah.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <!--  -->

      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                <div class="span6">
                    <img src="../../assets/galery.png" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2><?=  $gym->nama; ?></h2>
                    <!-- <p class="lead">For an international ad campaign. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</p> -->
                    <p><?=  $gym->deskripsi; ?></p>

                    <ul class="project-info">
                        <li><h6>Nama GYM :</h6> <?=  $gym->nama; ?> </li>
                        <li><h6>Alamat   :</h6> <?=  $gym->alamat; ?></li>
                        <li><h6>No Telp  :</h6> <?=  $gym->no_telp; ?></li>
                        <li><h6>Email    :</h6> <?=  $gym->email; ?></li>
                        <!-- <li><h6>Designer:</h6> Jimmy Doe</li> -->
                    </ul>

                    <button class="btn btn-inverse pull-left" DATA id="klik" type="button">Daftar Sekarang...</button>
                    <a href="<?php echo base_url('home');?>" class="pull-right"><i class="icon-arrow-left"></i>Back to All Gym</a>
                </div>
            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	
            

            <!-- modal -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div style="display: none" class="modal" id="modal-pesan" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-sm" >
                        <div class="modal-header">
                            <h3 class="modal-title">
                                Daftar GYM
                            </h3>
                        </div>
                        <div class="modal-body">
                            <div class="container" id="wizardx">
                                
                                
                                <h3>Data Diri </h3>
                                <section>
                                    <label for="name-2"> Name *</label>
                                    <input id="txtNama" name="txtNama" type="text" class="required">
                                    <label for="age-2"> Umur *</label>
                                    <input id="txtUmur" name="txtUmur"type="text">
                                    <!-- <div class="form-group"> -->
                                    <label for="name -2">Jenis Kelamin *</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="txtJk" id="txtJk" value="Laki-Laki" checked="">
                                            Laki-Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="txtJk" id="txtJk" value="Perempuan">
                                            Perempuan
                                            </label>
                                        </div>
                                    <!-- </div> -->


                                <!-- </section>
                                <h3>Data Contact </h3>
                                <section> -->
                                    <div class="form-group" > 
                                        <label for="address-2">No Telp *</label>
                                        <input id="txtTelp" name="tlp" type="number" class="required">
                                    </div>
                                    <div class="form-group" >
                                        <label for="address-2">Alamat *</label>
                                        <input type="text" name="alamat" id="txtAlamat" class="required">
                                    </div>
                                    <div class="form-group" >
                                        <label for="email-2">Email * <small style="text-collor:red">Silahkan masukan email yang benar!!!</small></label>
                                        <input id="txtEmail" name="email" type="text" class="required email">
                                        
                                    </div>

                                </section>
                                <h3>Data Daftar</h3>
                                <section>
                                    <label for="name-2">Nama GYM</label>
                                    <input type="text" name="namaGym" id="namaGym" value="<?=  $gym->nama;  ?>">
                                    <label for="name-2">Pilih Package</label>
                                    <div class="form-group" > 
                                        <select id="paketcangg" data-placeholder="Pilih Package..." ul class="chosen-choices  " tabindex="1" name="paket" >
                                                <option value="0">pilih package</option>
                                                <?php 
                                                    foreach($paket as $p){
                                                        echo " <option value=". $p->kd_paket.">".$p->nama_paket."</option>";	
                                                    }
                                                ?>
                                            
                                                
                                        </select>
                                    </div>
                                    <!-- <div class="form-group" >
                                        <label for="email-2">Harga </label>
                                        <input id="hargacng" name="hargacng" type="text" class="required" > 
                                    </div> -->
                                    <table class="table table-bordered">
                                <thead>
                                <tr>
                                    
                                   
                                      <tr>  
                                    <th>Harga Paket</th>
                                    <td><input id="hargacng" type="text" name="harhacng" class="form-control input-bg" ></td>
                                    </tr>   	
                                      <tr>  
                                    <th>Harga Daftar</th>
                                    <td><input id="hdaftar" type="text" name="hdaftar" class="form-control input-bg" value=<?=  $gym->harga_daftar;  ?>></td>
                                    </tr>   	
                                      <tr>  
                                    <th>Total</th>
                                    <td><input id="setTotal" type="number" name="setTotal" class="form-control input-bg"></td>
                                </tr>
                                </thead>
                               
                                </table>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">Silahkan Cek Email Dan Lakukan Pebayaran.</label>
                                </section>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- endmodal -->
            <div class="footer-container"><!-- Begin Footer -->
    <div class="color-bar-2 color-bg"></div>
    	<div class="container">
        	<div class="row footer-row">
            <div class="row" style="margin-left:4px"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2019 adaGYM... All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a>ada GYM</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->
            </div>
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>

<script>

      $(document).ready(function(){
           $("#klik").click(function(){ 
            console.log("a");
            var id = <?php echo $this->uri->segment(3)?>;
            console.log(id);
            $("#modal-pesan").modal("show");
 
            $('#paketcangg').change(function() {
                var kdpaket = $(this).val();
                var id = <?php echo $this->uri->segment(3)?>;
                console.log("databerubah");
                $.ajax({
                    url: '<?=base_url('gym/getData')?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {kdpkt: kdpaket,
                            id : id},
                    success:function(get){
                       
                        $("#hargacng").val(get[0].harga);
                        var hargacng = parseInt($("#hargacng").val());
                        var hargadaf = parseInt($("#hdaftar").val());
                        var total = hargacng + hargadaf;
                        console.log(hargacng);
                        console.log(hargadaf);
                        $("#setTotal").val(total);
                        console.log(total);

                    }
                });
                
                });
           });

        
           var indexsekarang = 0;
           $("#wizardx").steps({
               headerTag: "h3",
               bodyTag: "section",
               autoFocus: true,
               transitionEffect:"slideLeft",
               onStepChanging: function(event, currentIndex, maxindex){   
                   if(indexsekarang<maxindex){
                        if(indexsekarang==0){                    
                            var nama     =  $('#txtNama').parsley();
                            var umur     =  $('#txtUmur').parsley();
                            var jk       =  $('#txtJk').parsley();
                            var tlp      =  $('#txtTelp').parsley();
                            var alamat   =  $('#txtAlamat').parsley();
                            var email    =  $('#txtEmail').parsley();
                              if(nama.isValid() 
                              & umur.isValid()
                              & jk.isValid()
                              & tlp.isValid() 
                              & alamat.isValid()
                              & email.isValid()){
                                console.log('nyak');
                                return true;
                              }
                              else{
                                  nama.validate();
                                  umur.validate();
                                  jk.validate();
                                  telp.validate();
                                  alamat.validate();
                                  email.validate();
                                  console.log('singnyak');
                                  return false;
                              }
                        }
                   }else{
                       console.log("kok mai");
                       return true;
                   }
               },
                onFinishing: function (event, currentIndex) { 
                    var namagym = $('#namaGym').parsley();
                    var paket   = $('#paketcangg').parsley();
                    var harga   = $('#hargacng').parsley();
                        if(namagym.isValid() 
                        & paket.isValid()
                        & harga.isValid()){
                            console.log('nyak 2');                                    
                            return true;
                        }else{
                            namagym.validate();
                            paket.validate();
                            harga.validate();
                            return false;
                        }
                 }, 
                onFinished: function () {
                    console.log('mekere suud')
                    var a = $('#txtNama').val();
                    var b = $('#txtUmur').val();
                    var c = $('#txtJk').val();
                    var d = $('#txtTelp').val();
                    var e = $('#txtAlamat').val();
                    var f = $('#txtEmail').val();
                    var g = <?php echo $this->uri->segment(3)?>;
                    var h = $('#paketcangg').val();
                    var i = $('#setTotal').val();
                    var j = $('#hdaftar').val();
                    var k = $('#hargacng').val();
                    console.log(k);
                    $.ajax({
                        url:'<?=base_url('home/addData')?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {nama : a,
                               umur : b,
                               jk   : c,
                               telp : d,
                               ads  : e,
                               mail : f,
                               gym  : g,
                               paket: h,
                               total: i,
                               hdaf : j,
                               hpak : k},
                        success:function(){
                            console.log("success");
                            
                            $("#modal-pesan").modal("hide");
                        }
                        
                    });
                 }
           });
        });     
    
        
</script>