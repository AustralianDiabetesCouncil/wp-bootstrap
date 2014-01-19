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
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css"> 
 
<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_get_archives('type=monthly&format=link');
 
    wp_head();
?>


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

<div class="header-wrap">
    <header id="header">
      <h1 class="logo">
        <a href="http://www.australiandiabetescouncil.com">Australian Diabetes Council</a>
      </h1>

    <div class="row secondary-menu">
      <div class="main-nav-toggle">
          <a href="#" class="menu">&#9776;</a>
      </div>

      <div class="search col-md-offset-2 col-sm-5">
          <div class="search-wrap">
              <form id="search-form" action="http://www.australiandiabetescouncil.com/search-results">
                  <label for="q" id="search-label" class="screen-reader">Search</label>
                  <input aria-labelledby="search-label" id="q" type="search" name="q" class="search-field" placeholder="Search the ADC etwork" value="">
                  <span class="search-icon"></span>
                  <input type="button" id="search-button" value="Search" class="button search-button" onClick="window.location='http://ww.australiandiabetescouncil.com/search-results?q=' + this.form.q.value">
          </form>
          </div>
      </div>
      

     <div class="col-md-3 hidden-xs pull-right">      
        <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Membership <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="https://australiandiabetescouncil.wufoo.com/forms/w7x3k1/">Become a Member</a>
                </li>
                <li>
                  <a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3w1/">Renew Membership</a>
                </li>
                <li>
                  <a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3s5/">Change Membership Details</a>
                </li>
                <li>
                  <a href="http://www.australiandiabetescouncil.com/membership/fees">Membership Fees</a>
                </li>
              </ul>
            </div>

          <button type="button" class="btn btn-success">Donate</button>
     </div>
   
    </div> <!--row end-->
    </header>
  </div>
  <!-- end header-wrap -->

  <div class="row">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <div class="col-md-offset-2 ">
          <?php  /* menu */
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        ); 
      ?>

    </nav>
</div>