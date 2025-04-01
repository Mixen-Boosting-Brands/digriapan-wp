<?php
/**
 * Template Name: Página de Contacto
 *
 * @package     Digriapan
 * @description Template para la página de contacto con formulario personalizado
 */

get_header(); ?>

<section id="jumbotron-interna" class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="formulario" class="py-60">
    <div id="cuchara" class="elemento-parallax"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6 offset-lg-6 text-lg-end">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Siempre estamos listos para responder tus preguntas
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="form-messages"></div>

                <form
                    action="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/mailer.php"
                    method="POST"
                    class="row g-3 needs-validation contact-form"
                    id="ajax-contact"
                    novalidate
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 form-floating mb-4">
                                <input
                                    type="text"
                                    class="form-control shadow-none"
                                    id="nombre"
                                    name="nombre"
                                    placeholder="Nombre completo*"
                                    pattern=".{5,50}"
                                    required
                                />
                                <label for="nombre" class="form-label"
                                    >Nombre completo*</label
                                >
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu nombre
                                    completo.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating mb-4">
                                <input
                                    type="email"
                                    class="form-control shadow-none"
                                    id="correo"
                                    name="correo"
                                    placeholder="Correo electrónico*"
                                    required
                                />
                                <label for="correo" class="form-label"
                                    >Correo electrónico*</label
                                >
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce una dirección de
                                    correo válida.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating mb-4">
                                <input
                                    type="tel"
                                    class="form-control shadow-none"
                                    id="telefono"
                                    name="telefono"
                                    placeholder="Teléfono*"
                                    required
                                />
                                <label for="telefono" class="form-label"
                                    >Teléfono*</label
                                >
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce un número de
                                    teléfono válido.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating mb-4">
                                <textarea
                                    class="form-control shadow-none"
                                    id="mensaje"
                                    name="mensaje"
                                    placeholder="Mensaje*"
                                    style="height: 100px"
                                    required
                                ></textarea>
                                <label for="mensaje">Mensaje*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu mensaje.
                                </div>
                            </div>
                            <div class="col-md-6 my-auto">
                                <button
                                    type="submit"
                                    class="btn btn-secondary btn-lg btn-block rounded-pill"
                                >
                                    <i
                                        class="fa-solid fa-paper-plane"
                                    ></i>
                                    Enviar
                                </button>
                            </div>
                            <div class="col-md-6 my-auto">
                                <div id="hold-on-a-sec">
                                    <i
                                        id="contact-spinner"
                                        class="fas fa-spinner fa-spin"
                                    ></i>
                                    Por favor espera...
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
