<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <meta name="description" content="">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77382555-28"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-77382555-28');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5LM3DTC');</script>
    <!-- End Google Tag Manager -->

    <!-- Vimeo Tracking Code -->
    <script type="text/javascript" defer="defer" src="https://extend.vimeocdn.com/ga/115792037.js"></script>

    <title></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css?v=010220211" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
  </head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LM3DTC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <div class="container">
        <div class="flex">

        <a href="home"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.svg" class="nav-logo" alt=""></a>

            <nav class="nav">
            <a class="skip" href="#menu"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bar.svg" class="btn" alt="menu bar"></a>
                 <?php wp_nav_menu(array(
                'container' => false,
                'menu' => __( 'Main Menu', 'textdomain' ),
                'menu_class' => 'dropdown menu',
                'theme_location' => 'topbar-menu',
                )); ?>
            </nav>
        </div>
    </div>
</header>