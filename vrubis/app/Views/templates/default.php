<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://127.0.0.1/vrubis/web/img/logo/logo-icon2.ico">
    <script src="http://127.0.0.1/vrubis/web/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://127.0.0.1/vrubis/web/js/jquery.min.js"><\/script>')</script>
    <title><?= App::getTitle(); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="http://127.0.0.1/vrubis/web/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://127.0.0.1/vrubis/web/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="http://127.0.0.1/vrubis/web/css/dashboard.css" rel="stylesheet">
    <link href="http://127.0.0.1/vrubis/web/css/styles.css" rel="stylesheet">
    <!-- Font styles -->
    <link href="http://127.0.0.1/vrubis/web/css/fonts/font-face.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://127.0.0.1/vrubis/web/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body> 
    <!-- Header -->
    <?php  include('header.php'); ?>
    
    <!-- Header-title -->
    <?php  include('header-title.php'); ?>
                         
    <!-- Main-content -->
    <div class="container-fluid">

      <div class="row main-content">
        <!-- Sidebar -->
        <div class="col-xs-12 col-sm-3 col-md-2 sidebar">

          <?php  include('sidebar.php'); ?>

        </div>

        <!-- Content -->
                <!-- .container start -->
        <div class="col-xs-12 col-sm-9 col-md-10 main">

          <?= $content; ?>

        </div>
      </div><!-- End of row main-content -->

    </div><!-- End of container-fluid main-content -->
    <!--
    <!-- footer -->
    <?php  include('footer.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="http://127.0.0.1/vrubis/web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://127.0.0.1/vrubis/web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://127.0.0.1/vrubis/web/js/ie10-viewport-bug-workaround.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/vrubis/web/js/spirit8/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="http://127.0.0.1/vrubis/web/js/spirit8/jquery.isotope.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/vrubis/web/js/spirit8/SmoothScroll.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/vrubis/web/js/spirit8/jquery.isotope.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="http://127.0.0.1/vrubis/web/js/spirit8/main.js"></script>
    
  </body>
</html>
<!--<div class="row main-content">
        <!-- Sidebar -->
        <div class="col-xs-12 col-sm-3 col-md-2 sidebar">

          <!--<?php /* include('sidebar.php'); */?> -->
            <?= $contentMenu; ?>
        </div>
        <!-- Content -->
                <!-- .container start -->
        <div class="col-xs-12 col-sm-9 col-md-10 main">

          <?= $content; ?>