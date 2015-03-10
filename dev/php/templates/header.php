<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script> 
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <body <?php body_class(); ?> >

<!-- header -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<!-- boven header -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<header class="header-boven">
    <div class="header-boven-contact u-gridContainer u-gridRow">
        <div class="header-boven-contact-wrapper1 u-gridCol8"
            <a href="#"><img class="header-boven-contact-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-boven-logo.jpg" ></a>
        </div>
        <div class="header-boven-contact-wrapper2 u-gridCol4">
            <div class="u-gridRow">
                <p class="header-boven-contact-title">Bel bij overlijden (24 uur per dag direct bereikbaar)</p>
                <a class="u-gridCol6 tell-all" href="tel:0705146100"> 
                    <img class="nummer-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Entypo_d83d(0)_1024.png"> 
                    <p class="header-boven-contact-nummer"> 070-514 61 00</p>
                </a>
               
            </div>
        </div>
    </div> 
</header> 
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- Hier stopt de bovenkant van de header -->



<!--midden header -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<nav class="header-midden"> <!-- midden header  navigatie-->
    <nav class="Bot-Nav ">
        <div class="u-gridContainer header-midden-nav">
            
            <div class="Nav-toggle u-cf">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
            </div>
 
            <?php include 'includes/navigation.php'; ?>
            
            <div class="Mob-contact-ico">
                <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0705146100">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-phone"></use> 
                    </svg>
                </a>
            
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@omen-uitvaartzorg.nl">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-envelope"></use> 
                    </svg>
                </a>
            </div>
        </div>
    </nav>         
</nav>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- Hier stopt het midden van de header -->



<!-- onderkant header -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<header class="header-onderkant u-gridContainer"><!-- onderkant header slider-->
            <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                    <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-onderkant-slider-image1.jpg" >
                    </div>
                    <div>
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-onderkant-slider-image2.jpg" >
                    </div> 
                    <div>
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-onderkant-slider-image3.jpg" >
                    </div>
                    <div>
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-onderkant-slider-image4.jpg" >
                    </div>
                    <div>
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/zonautoomen.jpg" >         
                    </div>
            </div>   <!-- einde slider van de onderkant header -->  
             <a class="header-onderkant-slider-text2" href="/condoleance-register"> Condoleanceregister online</a>  
             <a class="header-onderkant-slider-text" href="/mijn-uitvaartwens-formulier"> Stel hier uw uitvaartwensen samen</a>

</header>
<!-- ------------------------------------------------------------------------------------------------------------------- --> 
<!-- Hier stopt de onderkant header -->


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- hier stopt de header -->