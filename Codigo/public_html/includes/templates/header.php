<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->

    <!-- SEO -->
    <meta name="keywords" content="turismo vivencial, desestres, DCS3 turismo, turismo rural, nuevas rutas, agencia de ecoturismo, ecología y medio ambiente Perú, dcs3">

    <meta name="description" content="DCS3 turismo, Desestres es una empresa de turismo vivencial en la zona de Ayacucho
    ofrece servicio de traslado desde los hogares del cliente">

    <meta name="author" content="DCS3">



    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->

	<meta property="og:site_name" content="" /> <!-- website name -->

	<meta property="og:site" content="" /> <!-- website link -->

	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->

	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->

	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->

	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->

	<meta property="og:type" content="article" />



    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Website Title -->

    <title>DCS3 - Desestres</title>

    

    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link href="/css/fontawesome-all.css" rel="stylesheet">

    <link href="/css/swiper.css" rel="stylesheet">

	<link href="/css/magnific-popup.css" rel="stylesheet">

	<link href="/css/styles.css" rel="stylesheet">

	<link href="/css/style.css" rel="stylesheet">

	<!-- Favicon  -->

    <link rel="icon" href="/img/logo.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199525588-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-199525588-1');
    </script>
    <!-- ManyChat -->
    <script src="//widget.manychat.com/100676042181476.js" defer="defer"></script>
    <script src="https://mccdn.me/assets/js/widget.js" defer="defer"></script>

</head>

<body data-spy="scroll" data-target=".fixed-top">
<!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100676042181476");
      chatbox.setAttribute("attribution", "page_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    

    <!-- Preloader -->

	<div class="spinner-wrapper">

        <div class="spinner">

            <div class="bounce1"></div>

            <div class="bounce2"></div>

            <div class="bounce3"></div>

        </div>

    </div>

    <!-- end of preloader -->

    



    <!-- Navbar -->

    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->

        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->



        <!-- Image Logo -->

        <a class="navbar-brand logo-image" href="index.php"><img src="/img/LogoH.png" alt="alternative"></a>

        

        <!-- Mobile Menu Toggle Button -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-awesome fas fa-bars"></span>

            <span class="navbar-toggler-awesome fas fa-times"></span>

        </button>

        <!-- end of mobile menu toggle button -->



        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php#header">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php#services">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php#details">PAQUETES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php#callMe">LLAMANOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/carrito.php">Carrito(<?php echo empty($_SESSION['carrito'])? 0 : count($_SESSION['carrito']); ?>)</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="protocolos.php"><span class="item-text">Protocolos de Bioseguridad</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="FAQ.php"><span class="item-text">Preguntas Frecuentes</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="impacto.php"><span class="item-text">Triple impacto - DCS3</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACTANOS</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a target="_blank" href="https://www.facebook.com/dcs3tour">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a target="_blank" href="https://www.instagram.com/dcs3turismo/">
                        <span class="hexagon"></span>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->

    <!-- end of navbar -->
