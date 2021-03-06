<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122330019-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122330019-2');
        </script>


        <meta charset="utf-8">
        <title>Bomfa Advocacia</title>
        <meta name="description" content="">
        <meta name="author" content="BNR Softwares">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="favicon.png" >

        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/media-queries.css">
        <!--<link rel="stylesheet" href="css/magnific-popup.css">-->

        <link rel="stylesheet" href="css/topo.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/sobre.css">
        <link rel="stylesheet" href="css/especialidades.css">
        <link rel="stylesheet" href="css/rodape.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
<?php
    $link_email = "mailto:tarsonbomfa@gmail.com";
    $link_instagram = "";
    $link_linkedin = "";
    //$link_skype = "skype:echo123?call";
    $link_whatsapp = "https://api.whatsapp.com/send?phone=5567992657112&amp;text=Olá";
?>
    <body>
        <header id="home">
            <nav id="nav-wrap">
                <?php include_once('topo.php'); ?>
            </nav>

            <div class="row banner">
                <?php include_once('home.php'); ?>
            </div>

            <p class="scrolldown">
                <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
            </p>
        </header>

        <section id="about">
            <?php include_once('sobre.php'); ?>
        </section>

        <section id="resume">
            <?php include_once('especialidades.php'); ?>
        </section>   

        <!--<section id="testimonials">
            <?php //include_once('frases.php'); ?>
        </section>-->

        <section id="contact">
            <?php include_once('contato.php'); ?>
        </section>

        <footer>
            <?php include_once('rodape.php'); ?>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/modernizr.js"></script>
        <!--<script src="js/jquery.flexslider.js"></script>-->
        <script src="js/waypoints.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/magnific-popup.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>