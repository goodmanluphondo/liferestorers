<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php show_title(); ?>
<link rel="stylesheet" href="src/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script src="src/main.js"></script>
</head>
<body>
<div id="app" class="site">
    <header id="site-header">
        <div class="row">
            <div id="site-logo">
                <a href="<?php echo(SITE_HOME); ?>"><img src="assets/logo-black.png"/></a>
                <a href="javascript:void(0);" id="open"><i class="fa fa-bars"></i></a>
            </div><!-- end of .#site-logo -->
            <div id="site-menu">
                <!-- <a href="javascript:void(0);" id="close">&times;</a> -->
                <ul id="main-menu" class="menu-list">
                    <li><a href="javascript:void(0);" id="close">&times;</a></li>
                    <li><a href="<?php echo(SITE_HOME); ?>">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://sacoronavirus.co.za/" target="_new">COVID-19</a></li>
                </ul><!-- end of #main-menu -->
            </div><!-- end of .#site-menu -->
        </div><!-- end of .container -->
    </header><!-- end of #site-header -->