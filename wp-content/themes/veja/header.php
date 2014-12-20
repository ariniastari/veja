<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Veja
 * @since Veja 1.0
 */
?><!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class='navbar navbar-default' role='navigation'>
      <div class='container-fluid'>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='navbar-header'>
          <button class='navbar-toggle collapsed' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' type='button'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a href='<?php echo home_url(); ?>'>
            <div class='sprites brand'></div>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
          <?php wp_nav_menu( array('menu' => 'Top Menu', 'menu_class' => 'nav navbar-nav' )); ?>
          <ul class='nav navbar-nav navbar-right hidden-xs hidden-sm'>
            <li>
              <a href='#'>
                <div class='sprites veja'></div>
              </a>
            </li>
            <li>
              <a href='#'>
                <div class='sprites alfamart'></div>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>