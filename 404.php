<?php get_header(); ?>

    <section id="jumbotron-interna" class="bg-primary text-white">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-4" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"><?php esc_html_e(
                        "Error 404: Página no encontrada",
                        "html5blank"
                    ); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9 offset-lg-2 text-center">
                    <?php esc_html_e(
                        "Lo sentimos, no hay nada que mostrar aquí.",
                        "html5blank"
                    ); ?>
                    <br>
                    <a class="btn btn-primary rounded-pill" href="<?php echo esc_url(
                        home_url()
                    ); ?>">
					   <i class="fa-solid fa-house"></i> <?php esc_html_e(
            "Regresar al inicio",
            "html5blank"
        ); ?>
   					</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>








<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php esc_html_e("Page not found", "html5blank"); ?></h1>
				<h2>
					<a href="<?php echo esc_url(home_url()); ?>">
					   <?php esc_html_e("Return home?", "html5blank"); ?>
					</a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
