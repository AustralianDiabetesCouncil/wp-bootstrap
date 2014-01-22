<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php if ( is_search() ) { ?>
    <meta name="robots" content="noindex, nofollow" /> 
  <?php } ?>
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css"> 

</head>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-XQ9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XQ9S');</script>
<!-- End Google Tag Manager -->


<body>

  <header>
    <div class="header">     
      <div class="container">
        <!-- logo -->
          <h1 class="logo"><a href="http://www.australiandiabetescouncil.com">Australian Diabetes Council</a></h1>    
          
          

         

          


      </div> 
    </div>
  </header>


  <nav class="navbar navbar-default navbar-static-top" role="navigation">

    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand pull-right" href="#">hello</a>
  </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=" active"><a title="Home" href="http://localhost:8888/adcwebsite/">Home</a></li>
        <li> <a title="Education" href="#">Education</a></li>
        <li> <a title="Recipes" href="#">Recipes</a></li>
        <li> <a title="In Your Community" href="#">E&P Programs</a></li>
        <li> <a title="Health Professionals" href="#">Membership</a></li>
        <li> <a href="#">Shop</a></li>
        </li>
      </ul>

      <ul class="nav navbar-nav visible-xs">
        <li><a href="#">Contact</a></li>
        <li><a href="#">Donate</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>


  <!-- Wordpress Menu
  <?php  /* menu */
            wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          ); 
        ?>

  -->