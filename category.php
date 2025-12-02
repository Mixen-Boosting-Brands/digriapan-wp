<?php get_header(); ?>

<section id="jumbotron-interna" class="jumbotron-productos text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">

                <?php if (have_posts()): ?>
                    <div class="row">
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <article
                                    class="card h-100"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                >
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail("large", [
                                                "class" => "card-img-top",
                                                "alt" => get_the_title(),
                                            ]); ?>
                                        </a>
                                    <?php endif; ?>

                                    <div class="card-body text-start d-grid">
                                        <a href="<?php the_permalink(); ?>" class="h5 mb-2">
                                            <?php the_title(); ?>
                                        </a>

                                        <small class="text-body-secondary my-2">
                                            Publicado el <?php echo get_the_date(); ?>
                                        </small>

                                        <p class="mb-0">
                                            <?php echo wp_trim_words(
                                                get_the_excerpt(),
                                                20,
                                            ); ?>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        <?php
                        endwhile; ?>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            >
                                <?php the_posts_pagination([
                                    "mid_size" => 2,
                                    "prev_text" => __("« Anterior"),
                                    "next_text" => __("Siguiente »"),
                                ]); ?>
                            </div>
                        </div>
                    </div>

                <?php else: ?>

                    <p>No hay entradas en esta categoría.</p>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
