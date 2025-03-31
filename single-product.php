<?php get_header(); ?>

    <section id="jumbotron-interna" class="jumbotron-productos text-white">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-4" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

	<?php if (have_posts()):
     while (have_posts()):
         the_post(); ?>

        <section class="py-60">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-3 mb-4 text-start">
                        <h3
                            class="text-primary mb-3"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Categorías
                        </h3>
                        <select
                            class="form-select d-lg-none"
                            aria-label="Default select example"
                            onchange="location = this.value;"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <option selected>Selecciona una categoría</option>
                            <option value="#">Aditivos panadería</option>
                            <option value="#">Chocolatería</option>
                            <option value="#">
                                Cobertura brillo de pastel
                            </option>
                            <option value="#">Colorantes</option>
                            <option value="#">Condimentos y semillas</option>
                            <option value="#">Cremas Richi’s</option>
                            <option value="#">Fondant y betunes</option>
                            <option value="#">Frutas</option>
                            <option value="#">Granillos</option>
                            <option value="#">Harinas</option>
                            <option value="#">Harinas preparadas</option>
                            <option value="#">Lácteos y derivados</option>
                            <option value="#">Levaduras y mejorantes</option>
                            <option value="#">
                                Mantecas y aceites comestibles
                            </option>
                            <option value="#">Margarinas</option>
                            <option value="#">Pasteles</option>
                            <option value="#">
                                Pasteles y bases congeladas
                            </option>
                            <option value="#">Rellenos y mermeladas</option>
                            <option value="#">Rosca de reyes</option>
                            <option value="#">Saborizantes</option>
                        </select>
                        <ul
                            class="d-none d-lg-block"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <li>
                                <a class="active" href="#"
                                    >Aditivos panadería</a
                                >
                            </li>
                            <li><a href="#">Chocolatería</a></li>
                            <li><a href="#">Cobertura brillo de pastel</a></li>
                            <li><a href="#">Colorantes</a></li>
                            <li><a href="#">Condimentos y semillas</a></li>
                            <li><a href="#">Cremas Richi’s</a></li>
                            <li><a href="#">Fondant y betunes</a></li>
                            <li><a href="#">Frutas</a></li>
                            <li><a href="#">Granillos</a></li>
                            <li><a href="#">Harinas</a></li>
                            <li><a href="#">Harinas preparadas</a></li>
                            <li><a href="#">Lácteos y derivados</a></li>
                            <li><a href="#">Levaduras y mejorantes</a></li>
                            <li>
                                <a href="#">Mantecas y aceites comestibles</a>
                            </li>
                            <li><a href="#">Margarinas</a></li>
                            <li><a href="#">Pasteles</a></li>
                            <li><a href="#">Pasteles y bases congeladas</a></li>
                            <li><a href="#">Rellenos y mermeladas</a></li>
                            <li><a href="#">Rosca de reyes</a></li>
                            <li><a href="#">Saborizantes</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <?php the_content();
         // Dynamic Content.
         ?>
                        <?php edit_post_link();
         // Always handy to have Edit Post Links available.
         ?>
                    </div>
                </div>
            </div>
        </section>

	<?php
     endwhile; ?>
	<?php
 else:
      ?>

        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-9 offset-lg-2 text-center">
                        <?php esc_html_e(
                            "Lo sentimos, no hay nada que mostrar aquí.",
                            "html5blank"
                        ); ?>
                    </div>

                </div>
            </div>
        </section>

	<?php
 endif; ?>

<?php get_footer(); ?>
