<?php
/**
 * Template Name: Página de Nosotros
 *
 * @package     Digriapan
 * @description Template para la página de nosotros
 */

get_header(); ?>

<section id="jumbotron-interna" class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mb-4" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="nosotros" class="pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Inspirando<br />
                    cada creación
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                <figure data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/thumb-nosotros.png"
                        alt=""
                        class="img-fluid rounded mb-3"
                    />
                </figure>
            </div>
            <div class="col-lg-6">
                <p class="mb-4" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">
                    Distribuimos y comercializamos insumos para
                    panadería y pastelería, trabajando con marcas
                    líderes para ofrecerte siempre lo mejor.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-4" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400">
                        <div class="row">
                            <div
                                class="col-3 col-xl-2 my-auto text-center"
                            >
                                <div class="icono">
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/nosotros/ico-1.png"
                                        alt=""
                                        class="img-fluid"
                                    />
                                </div>
                            </div>
                            <div class="col-9 col-xl-10 my-auto">
                                <p class="fw-bold">
                                    Más de 30 años de experiencia
                                </p>
                                <p>
                                    Lideramos la comercialización y
                                    distribución de insumos para
                                    panadería y pastelería, ofreciendo
                                    productos de calidad e innovación.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="500">
                        <div class="row">
                            <div
                                class="col-3 col-xl-2 my-auto text-center"
                            >
                                <div class="icono">
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/nosotros/ico-2.png"
                                        alt=""
                                        class="img-fluid"
                                    />
                                </div>
                            </div>
                            <div class="col-9 col-xl-10 my-auto">
                                <p class="fw-bold">
                                    Compromiso con la excelencia
                                </p>
                                <p>
                                    Nos mantenemos a la vanguadia con
                                    asesoría especializada y productos
                                    innovadores para impulsar el
                                    crecimiento de nuestros clientes.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="600">
                        <div class="row">
                            <div
                                class="col-3 col-xl-2 my-auto text-center"
                            >
                                <div class="icono">
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/nosotros/ico-3.png"
                                        alt=""
                                        class="img-fluid"
                                    />
                                </div>
                            </div>
                            <div class="col-9 col-xl-10 my-auto">
                                <p class="fw-bold">
                                    Para profesionales y negocios del
                                    sector
                                </p>
                                <p>
                                    Nos dirigimos a panaderías,
                                    pastelerías, cafeterías y negocios
                                    gastronómicos que buscan calidad,
                                    innovación y un aliado confiable en
                                    sus insumos.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="mision-vision" class="py-30">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Misión:</h2>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Comercializar productos de panificación de alta
                    calidad, ofreciendo productos novedosos y
                    manteniéndonos siempre a la vanguardia en la
                    difusión de modernos métodos de producción,
                    asegurándonos de dar un Plus mediante el
                    asesoramiento adecuado para contribuir al desarrollo
                    y satisfacción del cliente.
                </p>
                <h2 class="mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">Visión:</h2>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">
                    Ser una empresa innovadora, competitiva, con el fin
                    de convertirnos en líderes en la comercialización y
                    distribución de materias primas para panadería,
                    pastelería y afines en el país, ofreciendo productos
                    de calidad.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="valores">
    <div class="container">
        <div class="row mb-4">
            <h2 data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="0">Nuestros valores:</h2>
        </div>
        <div class="row">
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-1.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">Compromiso</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-2.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">Profesionalismo</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-3.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">Servicio</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-4.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400">Competencia</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="500">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-5.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="500">Satisfacción</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-6.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600">Garantía</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="700">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-7.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="700">Confianza</p>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="icono mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="800">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/nosotros/valores/ico-8.png"
                        alt=""
                        class="img-fluid"
                    />
                </div>
                <p class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="800">Compromiso</p>
            </div>
        </div>
    </div>
</section>

<section id="politica-de-calidad" class="py-30">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Política de calidad:</h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Nuestra Política de Calidad se manifiesta mediante nuestro firme compromiso con los clientes, identificando sus necesidades y creciendo de la mano con ellos, estableciendo una cultura "Ganar - Ganar".
                </p>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">De acuerdo con los siguientes factores:</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="mb-0" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300">
                                    <li>Aptitud y actitud en el Servicio</li>
                                    <li>Profesionalismo</li>
                                    <li>Mejoramiento contínuo</li>
                                    <li>Ideas innovadoras</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="mb-0" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="400">
                                    <li>Trabajo en Equipo</li>
                                    <li>Asesoramiento Integral</li>
                                    <li>Generando rentabilidad</li>
                                    <li>Desarrollo de la Cultura Empresarial</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nuestros-clientes" class="pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-3" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Nuestros clientes:</h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Por los productos y materias primas de la especialidad a la cual está enfocado el área comercial de DigriaPan están dirigidos a los siguientes segmentos de mercado:
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="mb-0" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200">
                                    <li>Panaderías</li>
                                    <li>Pastelerías</li>
                                    <li>Food services</li>
                                    <li>Centros comerciales</li>
                                    <li>Cafeterías</li>
                                    <li>Tortillerías</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="mb-0" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300">
                                    <li>Universidades</li>
                                    <li>Pizzerías</li>
                                    <li>Abarrotes</li>
                                    <li>Mayoristas</li>
                                    <li>Hoteles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
