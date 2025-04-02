<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php
  wp_title("");
  if (wp_title("", false)) {
      echo " - ";
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
	<body <?php body_class(); ?>>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo site_url(); ?>">
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
                            <a id="btn-nav-1" href="<?php echo site_url(); ?>">Inicio</a>
                        </li>
                        <li>
                            <a id="btn-nav-2" href="<?php echo esc_url(
                                get_permalink(5)
                            ); ?>"
                                >Nosotros</a
                            >
                        </li>
                        <li>
                            <a id="btn-nav-3" href="<?php echo esc_url(
                                get_permalink(7)
                            ); ?>"
                                >Sucursales</a
                            >
                        </li>
                        <li>
                            <a id="btn-nav-4" href="<?php echo esc_url(
                                get_permalink(25)
                            ); ?>"
                                >Productos</a
                            >
                        </li>
                        <li>
                            <a id="btn-nav-5" href="<?php echo esc_url(
                                get_permalink(9)
                            ); ?>"
                                >Contáctanos</a
                            >
                        </li>
                        <?php if (function_exists("WC")): ?>
                            <li>
                                <a class="badge text-bg-primary" id="btn-nav-6" href="<?php echo wc_get_cart_url(); ?>">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
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

        <header id="navbar" class="<?php echo get_the_ID() == 5 ||
        get_the_ID() == 9
            ? "header-primary"
            : "header-secondary"; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 my-auto">
                        <a href="<?php echo site_url(); ?>">
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
                    <div class="col-6 col-lg-9 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="<?php echo is_home()
                                        ? "active"
                                        : ""; ?>" href="<?php echo site_url(); ?>">Inicio</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="<?php echo is_page("nosotros")
                                        ? "active"
                                        : ""; ?>" href="<?php echo esc_url(
    get_permalink(5)
); ?>">Nosotros</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="<?php echo is_page("sucursales")
                                        ? "active"
                                        : ""; ?>" href="<?php echo esc_url(
    get_permalink(7)
); ?>" href="<?php echo esc_url(get_permalink(7)); ?>">Sucursales</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="<?php echo is_page("productos")
                                        ? "active"
                                        : ""; ?>" href="<?php echo esc_url(
    get_permalink(25)
); ?>">Productos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="<?php echo is_page("contacto")
                                        ? "active"
                                        : ""; ?>" href="<?php echo esc_url(
    get_permalink(9)
); ?>">Contáctanos</a>
                                </li>
                                <?php if (function_exists("WC")): ?>
                                    <li class="list-inline-item">
                                        <a class="badge text-bg-primary" href="<?php echo wc_get_cart_url(); ?>">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
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
