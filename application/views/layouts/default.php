<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $template['title']; ?></title>
    <?php echo $template['partials']['styles']; ?>
    <?php echo $template['metadata']; ?>
    <link href="<?php echo base_url(); ?>assets/favicon.ico" rel="icon" type="image/x-icon" />
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="preloader">
      <div id="load"></div>
    </div>
    <?php echo $template['partials']['navigation']; ?>
    <?php echo $template['body']; ?>
    <?php echo $template['partials']['footer']; ?>
    <?php echo $template['partials']['scripts']; ?>
  </body>
</html>