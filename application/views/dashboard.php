<?php //$this->load->view('header');?> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>adaGym.com</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png"> 
    <link rel="shortcut icon" href="favicon.ico">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/selectFX/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css'); ?>">
    
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.all.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css')?>">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> -->
                <a class="navbar-brand" href="./"><img src="assets/logone.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../assets/logo2.png" alt="Logo"></a>
            </div>

            <?php $this->load->view('menu');?><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="assets/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" id="btnEditPro" href="#" ><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" id="btnEditPass" href="#" ><i class="fa fa-key"></i> Ganti Password</a>
                            <a class="nav-link" href="<?php echo base_url('login/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </header>
    <!-- /header -->
    <!-- Header-->

        <div class="breadcrumbs" style="margin-top:5px">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <!-- <div class="page-title">
                    <h1>Dashboard</h1>
                    </div> -->
                    <div class="page-title">
                    <h1 style="margin-top: 0px;
                            margin-bottom: 0px;">
                            Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3" style="margin-top:15px">
            <div class="col-sm-12">
                <div class="alert  alert-success " style="margin-top:15px" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> login success... Welcome back <?php echo $this->session->userdata('ses_nama');?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <!-- <canvas id="widgetChart4"></canvas> -->
                        </div>

                    </div>
                </div>
            </div>
        

        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    
                    <th>Gambar</th>
                    <th>Descripsi</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody id="showdata"></tbody>
                <tfoot>
                    <tr>
                    
                    <th>Gambar</th>
                    <th>Descripsi</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
        


            <div id="myModal" class="modal fade"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <form id="myForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Nama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtNama"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Alamat</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtAlamat"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">No telp</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtTelp"></input>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="txtEmail"></input>
                            </div>
                            </div>  
                            <div class="form-group">
                                <label for="name" class="label-control col-md-4">Harga Daftar</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtHargaDaf"></input>
                                </div>
                            </div>
                        
                    </form>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button id = "btnSave" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="passModal" class="modal fade"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body"> 
                    <form id="passForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Password Lama *</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="old_password"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Password Baru *</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="new"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Confirm Password *</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="confirm"></input>
                            </div>
                        </div>
                            
                    </form>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button id = "btnSubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="upGambar" class="modal fade"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <form id="gamForm" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtid" value="<?= $this->session->userdata('ses_id');?>">
                        <div class="form-group">
                            <label for="name" class="label-control col-md-4">Deskripsi</label>
                            <div class="col-md-12">
                                <textarea rows="8" name="content" id="conten" class="form-control"></textarea>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="name" class="label-control col-md-4">Gambar</label>
                            <div class="col-md-12">
                            <img id="image_preview" alt="image preview"/>
                            <!-- <img id="img_baru"> -->
                            <input type="file" name="filefoto" id= "image_source"  />
                            </div>
                        </div>
                     
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id = "btn_upGam" class="btn btn-primary" type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<script>
$(function(){
            
        $("#btnEditPass").click(function(){
            $('#passModal').modal('show');
            $('#passModal').find('.modal-title').text('Ganti Password');
            //$('#myForm').attr('action', '<?php echo base_url() ?>gym/updatePass');

            $('#old_password').change(function(){    
                console.log(a);
                var fopassword = $('#old_password').val();  
                    //mengirimkan old_password dan mengecek ke database ketersediaanya.
                        $.ajax({       
                        method: "POST",      
                        dataType: 'json',
                        url: "<?php echo base_url(); ?>gym/check_account", 
                        data: { opassword: fopassword} ,  
                        success:function(data){
                            //jika tersedia maka ambil data. data yang dikirimkan controller berupa nilai TRUE or FALSE
                            document.getElementById("new").disabled = data;
                            document.getElementById("confirm").disabled = data;
                            //fungsinya untuk memanipulasi input text id new dan confirm
                        }
                        });
            
                });
                //fungsi ini digunakan untuk cek kesamaan nilai antara inputan new dan confirm
            $('#confirm').change(function(){    
            var fnew = $('#new').val();  
            var fconfirm = $('#confirm').val();  
                if(fnew==fconfirm){
                    document.getElementById("submit").disabled = false;
                }else{
                    document.getElementById("submit").disabled = true;
                }

            });
        });

        //edit
        $('#btnEditPro').click(function(){
            // console.log('as');
            var kd_gym = <?= $this->session->userdata('ses_id');?>;
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Profile');
            $('#myForm').attr('action', '<?php echo base_url() ?>gym/updateGym');
            $.ajax({
                type: 'json',
                // dataType: 'json',
                method: 'get',
                url: '<?php echo base_url() ?>gym/showData',
                data: {kd_gym: kd_gym},
                
                success: function(data){
                    var a = JSON.parse(data);
                    $('input[name=txtNama]').val(a[0].nama);
                    $('input[name=txtAlamat]').val(a[0].alamat);
                    $('input[name=txtTelp]').val(a[0].no_telp);
                    $('input[name=txtEmail]').val(a[0].email);
                    $('input[name=txtHargaDaf]').val(a[0].harga_daftar);
                },
                error: function(){
                    alert("kd_gym = "+kd_gym );
                }
            });
        });

        $('#btnSave').click(function(){
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            //validate form
            var kd_gym = <?= $this->session->userdata('ses_id');?>;
            var nama = $('input[name=txtNama]');
            var alamat = $('input[name=txtAlamat]');
            var no_telp = $('input[name=txtTelp]');
            var email = $('input[name=txtEmail]');
            var haDaf  = $('input[name=txtHargaDaf]');
            var result = '';
            if(nama.val()==''){
                nama.parent().parent().addClass('has-error');
            }else{
                nama.parent().parent().removeClass('has-error');
                result +='1';
            }
            if(alamat.val()==''){
                alamat.parent().parent().addClass('has-error');
            }else{
                alamat.parent().parent().removeClass('has-error');
                result +='2';
            }
            if(no_telp.val()==''){
                no_telp.parent().parent().addClass('has-error');
            }else{
                no_telp.parent().parent().removeClass('has-error');
                result +='3';
            }
            if(email.val()==''){
                email.parent().parent().addClass('has-error');
            }else{
                email.parent().parent().removeClass('has-error');
                result +='4';
            }if(haDaf.val()==''){
                haDaf.parent().parent().addClass('has-error');
            }else{
                haDaf.parent().parent().removeClass('has-error');
                result +='5';
            }

            // if(result=='12'){
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: {
                        kd_gym :kd_gym,
                        //kd : $('input[name=txtId]').val(),
                        nama : $('input[name=txtNama]').val(),
                        alamat : $('input[name=txtAlamat]').val(),
                        no_telp : $('input[name=txtTelp]').val(),
                        email : $('input[name=txtEmail]').val(),
                        haDaf : $('input[name=txtHargaDaf]').val()
                    },
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(!response.error){
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if(response.type=='add'){
                                var type = 'added'
                            }else if(response.type=='update'){
                                var type ="updated"
                            }
                            //$('.alert-success').html('Profil Gym'+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                            //showAllBarang();
                            setTimeout(function(){
                                window.location = "page";},2000);
                                swal("Profil Gym update successfully","You clicked the button!","success");
                               
                            console.log(response.data);
                        }else{
                            alert('Error:'+response.message);
                            swal("Profil Gym update successfully","You clicked the button!","error");

                        }
                    },
                    error: function(error){
                        alert('Could not add data');
                        console.log(error);
                    }
                });
            // }
        });
        $('#gamForm').submit(function(e){
            e.preventDefault(); 
            var url = $('#gamForm').attr('action');
            var data = $('#gamForm').serialize();
            //validate form
            var kd_gym = <?= $this->session->userdata('ses_id');?>;
            var gam = $('input[name=content]');
            var des = $('input[name=filefoto]');
            var result = '';
            if(gam.val()==''){
                gam.parent().parent().addClass('has-error');
            }else{
                gam.parent().parent().removeClass('has-error');
                result +='1';
            }
            if(des.val()==''){
                des.parent().parent().addClass('has-error');
            }else{
                des.parent().parent().removeClass('has-error');
                result +='2';
            }

            // if(result=='12'){
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: new FormData(this),
                    async: false,
                    // dataType: 'json',
                    processData:false,
                    contentType:false,
                    cache:false,
                    success: function(response){
                        if(!response.error){
                            $('#upGambar').modal('hide');
                            $('#gamForm')[0].reset();
                            if(response.type=='add'){
                                var type = 'added'
                            }else if(response.type=='update'){
                                var type ="updated"
                            }
                            
                            setTimeout(function(){
                                window.location = "page";},2000);
                                swal("Deskripsi Gambar update successfully","You clicked the button!","success");
                                
                            console.log(response.data);
                        }else{
                            alert('Error:'+response.message);
                            swal("Deskripsi Gambar update successfully","You clicked the button!","error");

                        }
                    },
                    error: function(error){
                        alert('Could not add data');
                        console.log(error);
                    }
                });

            // }
        });

        $('#showdata').on('click', '.item-edit', function(){
            console.log('as');
            var kd_gym = <?= $this->session->userdata('ses_id');?>;
            $('#upGambar').modal('show');
            $('#upGambar').find('.modal-title').text('Deskripsi Dan Gambar');
            $('#gamForm').attr('action', '<?php echo base_url() ?>gym/desGambar');
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>gym/editDesGam',
                data: {kd_gym: kd_gym},
                async: false,
                success: function(data){
                    var a = JSON.parse(data);
                    $('#conten').val(a[0].deskripsi);
                     $('#image_preview').attr("src", 'assets/gambar/'+ a[0].gambar);
                
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        


        $(function showGambar(){
            console.log('kontol');
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('gym/showGambar'); ?>',
            success: function(data){
                var a = JSON.parse(data);

                var html = '';
                var i;
                for(i=0; i<a.length; i++){
                
                    html +='<tr>'+
                                '<td><img src ="../adagym.com/assets/gambar/'+a[i].gambar+'"></td>'+
                                '<td>'+a[i].deskripsi+'</td>'+
                                
                                '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+a[i].kd_gym+'">Edit</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#showdata').html(html);
            },
            error: function(){
                alert('Could not get Data from Database');
            }
        });
    });    
    function imageGanti(){
    document.getElementById("image_preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image_preview").src = oFREvent.target.result;
    };
  };
       
});

</script>

