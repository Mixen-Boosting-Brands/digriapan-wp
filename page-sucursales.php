<?php
/**
 * Template Name: Página de Sucursales
 *
 * @package     Digriapan
 * @description Template para la página de sucursales
 */

get_header(); ?>

<section id="jumbotron-interna" class="bg-secondary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Nuestras Sucursales
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="py-60">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9 offset-lg-2 text-center">
                <figure
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/mapa-sucursales@2x.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="ubicaciones" class="py-60 text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4 mb-lg-0">
            <div class="col-12 col-lg-5 col-xl-5 col-xxl-4 my-auto">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="col-12 col-lg-6 my-auto">
                <a
                    href="<?php echo esc_url(get_permalink(7)); ?>"
                    class="btn btn-secondary btn-lg rounded-pill"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                    >Ver más</a
                >
            </div>
        </div>
        <div class="row mb-4">
            <h4
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                Con presencia en diferentes estados de la república.
            </h4>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Matríz Chihuahua"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.8316357624044!2d-106.01864763185405!3d28.63742539750735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea44d33230eb4b%3A0xc5ca06eec7261147!2sDigriaPan%20Matriz!5e0!3m2!1ses-419!2smx!4v1741979964106!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            Sucursal Matríz<br />
                            Chihuahua, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Universidad Chihuahua"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.0064952944194!2d-106.09709902297523!3d28.659524182851715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea4311424ed933%3A0x257a5484b61e2977!2sDigriaPan%20Universidad!5e0!3m2!1ses-419!2smx!4v1742399757083!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            Sucursal Universidad<br />
                            Chihuahua, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Tecnológico Chihuahua"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.936168504621!2d-106.11673392297457!3d28.69155598139512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea424ba0d16c55%3A0xbbb7a4c09f9d4494!2sDigriaPan%20Tecnol%C3%B3gico!5e0!3m2!1ses-419!2smx!4v1742399938575!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                        >
                            Sucursal Tecnológico<br />
                            Chihuahua, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal 20 de Noviembre Chihuahua"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.7120203705617!2d-106.06753230672062!3d28.6383919210678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea44a763ecadd3%3A0x6e6b0b66821f13dc!2sDigriaPan%2020%20de%20Noviembre!5e0!3m2!1ses-419!2smx!4v1742399969933!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            Sucursal 20 de Noviembre<br />
                            Chihuahua, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Av. 10ma Delicias"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.5937966886813!2d-105.4845646229834!3d28.189266504068964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86eb159c6c24444f%3A0x4e8403f2082f9dd0!2sDigriaPan%20Delicias!5e0!3m2!1ses-419!2smx!4v1742400011588!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="700"
                        >
                            Sucursal Av. 10ma<br />
                            Delicias, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Calle Ojito Parral"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.109162206805!2d-105.66199340694513!3d26.93175359903738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8694513bc9db9e77%3A0xfa70fb67ed04378b!2sDigriaPan%20Parral%20Tienda!5e0!3m2!1ses-419!2smx!4v1742400044992!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="800"
                        >
                            Sucursal Calle Ojito<br />
                            Hidalgo del Parral, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Carretera Sta. Bárbara Parral"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.9487185260973!2d-105.71998812300413!3d26.93684015905045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869453527e785855%3A0xafdaed556779cfe4!2sDigriaPan%20Bodega%20Parral!5e0!3m2!1ses-419!2smx!4v1742400081509!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="900"
                        >
                            Sucursal Carretera Sta. Bárbara<br />
                            Hidalgo del Parral, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Paquimé Nuevo Casas Grandes"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.462011245419!2d-107.92032560647152!3d30.423002235399878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcad0b2ea5c141%3A0x6f2c8716d9e94219!2sDigriaPan%20Nuevo%20Casas%20Grandes!5e0!3m2!1ses-419!2smx!4v1742400154350!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1000"
                        >
                            Sucursal Paquimé<br />
                            Nuevo Casas Grandes, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Ferrocarril Cuauhtémoc"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.1204557023825!2d-106.86317732297935!3d28.415621993895016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c1cb962dcbd46d%3A0xf1475f81079e6c75!2sDigriaPan%20Cuauht%C3%A9moc!5e0!3m2!1ses-419!2smx!4v1742400196190!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1100"
                        >
                            Sucursal Ferrocarril<br />
                            Cuauhtémoc, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Aeronáutica Juárez"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.6409734206104!2d-106.44387400629651!3d31.616296175803914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e76735142c3601%3A0x673844df1c46026e!2sDigriaPan%20Cd%20Ju%C3%A1rez!5e0!3m2!1ses-419!2smx!4v1742400240998!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1200"
                        >
                            Sucursal Aeronáutica<br />
                            Cd. Juárez, Chih.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal A. Ruíz Guadalupe"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.915866063068!2d-100.2011322230234!3d25.707209510851786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ea41e520708f%3A0x6bc61475693e15f4!2sDigriaPan%20Monterrey!5e0!3m2!1ses-419!2smx!4v1742400277946!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1300"
                        >
                            Sucursal A. Ruíz<br />
                            Guadalupe, N.L.
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 d-grid mb-4">
                        <a
                            href="#"
                            class="btn btn-light rounded-pill"
                            data-bs-toggle="modal"
                            data-bs-target="#locationModal"
                            data-location-name="Sucursal Calle 3ra Gómez Palacio"
                            data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.0497571179435!2d-103.48187922302557!3d25.570011316496462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd9508caf0e47%3A0x7587036b459524c4!2sDigriaPan%20Gomez%20Palacio!5e0!3m2!1ses-419!2smx!4v1742400317044!5m2!1ses-419!2smx"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1400"
                        >
                            Sucursal Calle 3ra<br />
                            Gómez Palacio, Dgo.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
