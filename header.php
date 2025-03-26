<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php
  wp_title("");
  if (wp_title("", false)) {
      echo " : ";
  }
  bloginfo("name");
  ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name"
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo("description"); ?>">

		<link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="DigriaPan" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

		<?php wp_head(); ?>
	</head>
	<body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="#">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt="DigriaPan"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="#">Inicio</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#nosotros"
                                >Nosotros</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#sucursales"
                                >Sucursales</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#"
                                >Productos</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="#"
                                >Contáctanos</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-6" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div id="social">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-square-x-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:cmail@domain.com"
                                >mail@domain.com</a
                            >
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526141234567">(614) 123 4567</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-6 my-auto">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt="DigriaPan"
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-6 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="active" href="#">Inicio</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#nosotros">Nosotros</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Sucursales</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Productos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Contáctanos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"
                                        ><i
                                            class="fa-solid fa-cart-shopping"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
