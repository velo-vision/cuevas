<!DOCTYPE html>
 <html lang="en">
   <head>
   <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- cueva -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fancybox.css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/CustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/oka_slider_model.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
   </head>
   <body>

   <!-- <section class="fondo-home" id="inicio" style="background-image: url('<?php bloginfo('template_url'); ?>/images/home/fondo2.jpg'); !important ;"> -->


     <?php  $Fondo =  get_field("fondo", 128); ?>

              <section id="inicio" style="background-image: url('<?php echo $value['imagen'] ?>') !important ;">










    <div class="row" >
      <div class="row nomargin">
        <nav class="menu-fijo">
          <div class="row nomargin">
            <div class="col s12 m12 l12">
              <div class="col l2">
                <img class="hide-on-small-only hide-on-med-only logo-principal" src="<?php bloginfo('template_url'); ?>/images/home/logo02.png">
              </div>
              <div class="col l10">
                <div class="col s12 l12 hide-on-small-only hide-on-med-only">
                  <p class="font-home">
                     Teléfono:
                     <a href="tel:<?php echo get_field("telefono1", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono1", 35); ?></a>,
                     <a href="tel:<?php echo get_field("telefono2", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono2", 35); ?></a>,
                     <a href="tel:<?php echo get_field("telefono3", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono3", 35); ?></a>,
                     <a href="tel:<?php echo get_field("telefono4", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono4", 35); ?></a>
                  </p>
                </div>
                <div class="col s12 l3 center-align hide">
                  <a href="#"><i class="fa fa-facebook blanco margin-sep" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter blanco margin-sep" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram blanco margin-sep" aria-hidden="true"></i></a>
                </div>
                <div class="col s12 m12">
                  <a href="#!" class="brand-logo">
                  <img class="hide-on-large-only size-logo-menu-uno" src="<?php bloginfo('template_url'); ?>/images/home/cu.png" class="size-logo-menu-uno">&nbsp;&nbsp;&nbsp;
                  <img class="hide-on-large-only size-logo-menu-dos" src="<?php bloginfo('template_url'); ?>/images/home/ex.png"></a>
                </div>
                <div class="nav-wrapper color-menu">
                  <a href="#" data-activates="mobile-demo" class="button-collapse separacion-menu"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down collapse menu-transparent lista">
                      <li><p class="font-home display-menu style-menu"><?php wp_nav_menu('menu'); ?></p></li>
                    </ul>
                    <ul class="side-nav menu-var-divice lista menu-fijo" id="mobile-demo">
                      <li><p class="font-home display-menu"><?php wp_nav_menu('menu'); ?></p></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
        <!--menu fixed-->
      <nav class="navbar-fixed menu1" style="display: none;">
        <div class="row nomargin">
          <div class="col s12 m12 l12">
            <div class="col l2">
              <img class="hide-on-small-only hide-on-med-only logo-principal" src="<?php bloginfo('template_url'); ?>/images/home/logo02.png">
            </div>
            <div class="col l10">
              <div class="col s12 l12 hide-on-small-only hide-on-med-only">
                <p class="font-home">Teléfono:
                  <a href="tel:<?php echo get_field("telefono1", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono1", 35); ?></a>,
                  <a href="tel:<?php echo get_field("telefono2", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono2", 35); ?></a>,
                  <a href="tel:<?php echo get_field("telefono3", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono3", 35); ?></a>,
                  <a href="tel:<?php echo get_field("telefono4", 35); ?>" class="telfono-contacto"><?php echo get_field("telefono4", 35); ?></a>
                </p>
              </div>
              <div class="col s12 l3 center-align hide">
                <a href="#"><i class="fa fa-facebook blanco margin-sep" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter blanco margin-sep" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram blanco margin-sep" aria-hidden="true"></i></a>
              </div>
              <div class="col s12 m12">
                <a href="#!" class="brand-logo"><img class="hide-on-large-only size-logo-menu-uno" src="<?php bloginfo('template_url'); ?>/images/home/cu.png">&nbsp;&nbsp;&nbsp;
                <img class="hide-on-large-only size-logo-menu-dos" src="<?php bloginfo('template_url'); ?>/images/home/ex.png"></a>
              </div>
              <div class="nav-wrapper color-menu">
                <ul class="right hide-on-med-and-down collapse menu-transparent lista">
                  <li><p class="font-home display-menu"><?php wp_nav_menu('menu'); ?></p></li>
                </ul>
                <ul class="side-nav menu-var-divice lista" id="mobile-demo">
                  <li><p class="font-home display-menu"><?php wp_nav_menu('menu'); ?></p></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
          <!--fin-->
