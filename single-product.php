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
                <div class="row">
                    <div class="col col-lg-9 offset-lg-2">
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
