<?php get_header(); ?>

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

	<?php if (have_posts()):
     while (have_posts()):
         the_post(); ?>

        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-9 offset-lg-2 text-center">
                        <figure
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <?php the_post_thumbnail("full", [
                                "class" => "img-fluid",
                            ]); ?>
                        </figure>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <?php esc_html_e(
                                    "Por",
                                    "html5blank"
                                ); ?> <?php the_author_posts_link(); ?>
                            </li>
                            <li class="list-inline-item">
                                ·
                            </li>
                            <li class="list-inline-item">
                                <time datetime="<?php the_time(
                                    "Y-m-d"
                                ); ?> <?php the_time("H:i"); ?>">
                                   	<?php the_date(); ?> <?php the_time(); ?>
                				</time>
                            </li>
                        </ul>
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
