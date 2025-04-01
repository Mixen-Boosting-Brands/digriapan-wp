<?php
/**
 * Template Name: Página de Categorías de Productos
 *
 * @package     Digriapan
 * @description Template para desplegar todas las categorías de productos
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
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="productos" class="py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1
                    class="text-primary"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Lo que aman los pasteleros
                </h1>
                <h4
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Conoce nuestros suministros para cada necesidad
                </h4>
            </div>
        </div>
        <div class="row mb-4">
            <?php
            $taxonomy = "product_cat";
            $orderby = "name";
            $show_count = 0; // 1 for yes, 0 for no
            $pad_counts = 0; // 1 for yes, 0 for no
            $hierarchical = 1; // 1 for yes, 0 for no
            $title = "";
            $empty = 0;

            $args = [
                "taxonomy" => $taxonomy,
                "orderby" => $orderby,
                "show_count" => $show_count,
                "pad_counts" => $pad_counts,
                "hierarchical" => $hierarchical,
                "title_li" => $title,
                "hide_empty" => $empty,
                "exclude" => [15], // Excluir la categoría "Sin categorizar"
            ];

            $all_categories = get_categories($args);

            $delay = 300;
            foreach ($all_categories as $cat) {

                $category_thumbnail = get_term_meta(
                    $cat->term_id,
                    "thumbnail_id",
                    true
                );
                $image = wp_get_attachment_url($category_thumbnail);
                if (!$image) {
                    $image =
                        get_template_directory_uri() .
                        "/assets/images/placeholder.png"; // Imagen por defecto
                }
                ?>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div
                        class="card"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo $delay; ?>"
                    >
                        <a href="<?php echo get_term_link(
                            $cat->slug,
                            "product_cat"
                        ); ?>">
                            <img
                                src="<?php echo $image; ?>"
                                class="card-img-top"
                                alt="<?php echo $cat->name; ?>"
                            />
                        </a>
                        <div class="card-body d-grid">
                            <a href="<?php echo get_term_link(
                                $cat->slug,
                                "product_cat"
                            ); ?>"
                                class="btn btn-secondary btn-lg">
                                <?php echo $cat->name; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php $delay += 100;
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
