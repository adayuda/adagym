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
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> -->
                <a class="navbar-brand" href="./"><img src="../../assets/logone .png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../../assets/logo2.png" alt="Logo"></a>
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
                            <img class="user-avatar rounded-circle" src="../../assets/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?php echo base_url('profil/edit_profil')?>"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="<?php echo base_url('login/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                   
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

