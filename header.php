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
  
  <h1 class="logo"><a href="http://www.australiandiabetescouncil.com">Australian Diabetes Council</a></h1>

  <header id="header">
  
    <div class="hidden-xs top-menu ">
        <ul class="list-inline pull-right">
          <li><h4 class="contact-number"> <a href="contact">Contact / 1300 342 238</a> </h4></li>

          <li><div class="btn-group ">
                <button type="button" class="btn  btn-primary dropdown-toggle" data-toggle="dropdown">
                  Membership <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://australiandiabetescouncil.wufoo.com/forms/w7x3k1/">Become a Member</a></li>
                  <li><a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3w1/">Renew Membership</a></li>
                  <li><a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3s5/">Change Membership Details</a>
                  </li>
                  <li><a href="http://www.australiandiabetescouncil.com/membership/fees">Membership Fees</a></li>
                </ul>
              </div>
          <li><button type="button" class="btn  btn-success">Donate</button></li>
        </ul>
    </div>
      
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <div class="col-sm-offset-2">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
            <ul class="nav navbar-nav navbar-right col-sm-3 col-md-4">
                <div class="search ">
                    <div class="search-wrap">
                        <form id="search-form" action="http://www.australiandiabetescouncil.com/search-results">
                          <label for="q" id="search-label" class="screen-reader">Search</label>
                          <input aria-labelledby="search-label" id="q" type="search" name="q" class="search-field" placeholder="Search" value="">
                          <span class="search-icon"></span>
                          <input type="button" id="search-button" value="Search" class="button search-button" onClick="window.location='http://ww.australiandiabetescouncil.com/search-results?q=' + this.form.q.value">
                    </form>
                    </div>
                </div>                
            </ul>

            <div class="nav navbar-nav two-column-nav">
              <li ><a href="/adcwebsite/">H</a></li>
<!DOCTYPE html>
                <li><a href="/adcwebsite/?page_id=27">Education</a></li>
                <li><a href="/adcwebsite/?page_id=40">Recipes</a></li>
                <li><a href="http://shop.australiandiabetescouncil.com/">Shop</a></li>
                <li><a href="/adcwebsite/?page_id=36">Programs</a></li>

                <!-- top menu items only showing in mobile toggle menu -->
                <li class="visible-xs"><a class="visible-xs" href="#">Membership</a></li>
                <li class="visible-xs"><a class="visible-xs" href="#">Donate</a></li>
                <li ><a class="visible-xs" href="#">Contact</a></li>
                <li><a href="#footerlink">More <span class="caret"></span></a></li>

            </div>
      </div><!-- /.navbar-collapse -->

    </nav>

  </header>
</div>

