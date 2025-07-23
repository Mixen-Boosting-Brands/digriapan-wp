<?php
/**
 * Template Name: Resultados de Búsqueda
 *
 * @package     Digriapan
 */

get_header(); ?>

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
                    Resultados para: <?php echo get_search_query(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="resultados" class="py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1
                    class="text-primary"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Resultados de búsqueda
                </h1>
                <h4
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <?php echo sprintf(
                        __("Encontramos %s resultado(s)"),
                        $wp_query->found_posts
                    ); ?>
                </h4>
            </div>
        </div>
        <div class="row mb-4">
            <?php if (have_posts()): ?>
                <?php
                $delay = 300;
                while (have_posts()):

                    the_post();

                    // Usa imagen destacada o una por defecto
                    $image = get_the_post_thumbnail_url(get_the_ID(), "medium");
                    if (!$image) {
                        $image =
                            get_template_directory_uri() .
                            "/assets/images/placeholder.png";
                    }
                    ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo $delay; ?>"
                        >
                            <a href="<?php the_permalink(); ?>">
                                <img
                                    src="<?php echo esc_url($image); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>"
                                />
                            </a>
                            <div class="card-body d-grid">
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-lg">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $delay += 100;
                endwhile;
                ?>
            <?php else: ?>
                <div class="col">
                    <p class="text-center h4" data-aos="fade-up" data-aos-duration="1000">
                        No encontramos resultados para tu búsqueda. Intenta con otros términos.
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col">
                <?php // Paginación (si es necesaria)
                the_posts_pagination([
                    "mid_size" => 2,
                    "prev_text" => __("← Anterior"),
                    "next_text" => __("Siguiente →"),
                    "screen_reader_text" => "",
                    "class" => "pagination justify-content-center",
                ]); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
