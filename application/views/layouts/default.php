<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $template['title']; ?></title>
  <link href="<?php base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php base_url(); ?>assets/css/animate.css" rel="stylesheet" />
  <link href="<?php base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/color/default.css" rel="stylesheet">
  <?php echo $template['metadata']; ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
          <h1>SQUAD FREE</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Mission</a></li>
          <li><a href="#contact">Register</a></li>
          <!--
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
            </ul>
          </li>
          -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <?php echo $template['body']; ?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
            </div>
          </div>
          <p>&copy;SquadFREE. All rights reserved.</p>
          <div class="credits">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="<?php base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php base_url(); ?>assets/js/jquery.easing.min.js"></script>
  <script src="<?php base_url(); ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php base_url(); ?>assets/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="<?php base_url(); ?>assets/js/custom.js"></script>
  <script src="<?php base_url(); ?>assets/contactform/contactform.js"></script>

</body>

</html>