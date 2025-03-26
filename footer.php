        <footer class="py-60 text-white">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-3 offset-lg-1 mb-4 order-lg-2">
                        <h4
                            class="mb-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Nuestra tienda
                        </h4>
                        <nav>
                            <ul class="list-unstyled">
                                <li
                                    class="mb-3"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="100"
                                >
                                    <a href="#">Inicio</a>
                                </li>
                                <li
                                    class="mb-3"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="200"
                                >
                                    <a href="#">Nosotros</a>
                                </li>
                                <li
                                    class="mb-3"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="300"
                                >
                                    <a href="#">Sucursales</a>
                                </li>
                                <li
                                    class="mb-3"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="400"
                                >
                                    <a href="#">Productos</a>
                                </li>
                                <li
                                    class="mb-3"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="500"
                                >
                                    <a href="#">Contáctanos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 offset-lg-1 mb-4 order-lg-3">
                        <h4
                            class="mb-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Información de contacto Matrix
                        </h4>
                        <ul class="contacto list-unstyled">
                            <li
                                class="mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="100"
                            >
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+526144153115">(614) 415-3125</a>
                            </li>
                            <li
                                class="mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:contacto@digriapan.com"
                                    >contacto@digriapan.com</a
                                >
                            </li>
                            <li
                                class="direccion mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300"
                            >
                                <i class="fa-solid fa-location-dot"></i>
                                <address class="d-inline-block">
                                    Calle Industrial Diez 7407-8<br />
                                    Col. Aeropuerto, C.P. 31384<br />
                                    Chihuahua, Chihuahua, México.
                                </address>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-center order-lg-1">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt="DigriaPan"
                                class="logo img-fluid"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            />
                        </a>
                        <h4
                            class="my-4 my-lg-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Expertos en<br />panificación
                        </h4>
                        <ul class="list-inline social">
                            <li
                                class="list-inline-item"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li
                                class="list-inline-item"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300"
                            >
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li
                                class="list-inline-item"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="400"
                            >
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <p>
                            &copy; <?php echo date(
                                "Y"
                            ); ?> <?php echo get_bloginfo(
     "name"
 ); ?>. Todos los derechos
                            reservados.
                        </p>
                        <p class="mb-0">
                            Hecho con <i class="fa-solid fa-heart"></i> por
                            <a href="https://mixen.mx/" target="_blank">Mixen</a
                            >.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

        <?php wp_footer(); ?>

        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js"></script>

        <!--Modal Sucursales -->
        <div
            class="modal fade"
            id="locationModal"
            tabindex="-1"
            aria-labelledby="locationModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="locationModalLabel">
                            Ubicación
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <iframe
                            id="mapFrame"
                            width="100%"
                            height="450"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                        >
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
