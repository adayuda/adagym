
<!-- <?php
foreach ($gym as $g) {
	# code...
	echo "<tr>
			<td>".$g->kd_gym."</td>
			<td>".$g->nama."</td>
			<td>".$g->alamat."</td>
			<td>".$g->no_telp."</td> 
			<td>".$g->email."</td>
			<td>daftar</td>
			
		  </tr>";
}
?> -->


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

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
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
<script src="<?php echo base_url('assets/home/js/jquery.prettyPhoto.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.flexslider.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.custom.js');?>"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href=""><img src="../../adagym.com/assets/logone.png" alt="" /></a>
           
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="active"><a href="<?=  base_url('home/index');?>">  Home  </a></li>
             <li><a href="#">  Daftar  </a></li>
             <li><a href="<?=  base_url('home/bukBar');?>">  Pembayaran </a></li>
            </ul>
           
            </div> 

            <!-- Mobile Nav
            ================================================== -->
            <!-- <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form> -->

        </div>
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="../../adagym.com/assets/2.png" alt="slider" /></li>
                <li><img src="../../adagym.com/assets/3.png" alt="slider" /></li>
                <li><img src="../../adagym.com/assets/2.png" alt="slider" /></li>
                <li><img src="../../adagym.com/assets/3.png" alt="slider" /></li>
               
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to ada GYM. <br />
           </h3>
            <p class="lead">ada GYM menawarkan anda untuk mendaftar secara online pada GYM yang sudah terdaftar dalam ada GYM.</p>
            <p>Silahkan pilih GYM jika anda ingin mendaftar pada salah satu GYM yang sudah terdaftar pada ada GYM, Dapatkan beberapa kemudahan berupa pengingat anda untuk membawar biaya keanggotaan pada GYM yang anda pilih, membayar biaya keanggotaan melalui via online, dan mendapat informasi penting lainnya, lets go join now....</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">Ada GYM 
                <small>Join now to get your great body..</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View GYM</button>
            </h5>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
            
                    <?php foreach ($gym as $g ) {
            			# code...
            		// gallery
            		?>
            		
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="<?php echo base_url('home/detail/'. $g->kd_gym );?>" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="../../adagym.com/assets/gambar/<?php echo $g->gambar ;?>" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm"><?php echo $g->nama ;?></a><?php echo $g->deskripsi ;?> </span>
                    </li>
                    <?php
                    }
                    ?>
                    
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    
    	<!-- Blog Preview
        ================================================== -->
    	<!-- <div class="span6">

            <h5 class="title-bg">From the Blog 
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

         	
        </div> -->
        
        <!-- Client Area
        ================================================== -->
        
        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

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

           

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>


