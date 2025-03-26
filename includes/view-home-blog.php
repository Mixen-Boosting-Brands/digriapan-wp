<?php
// Configuración de la consulta
$args = [
    "post_type" => "post",
    "posts_per_page" => 3,
    "category_name" => "blog",
    "orderby" => "date",
    "order" => "DESC",
];

// Ejecutar la consulta
$blog_query = new WP_Query($args);

// Variable para controlar qué post estamos mostrando
$post_counter = 0;

if ($blog_query->have_posts()): ?>

<section id="blog" class="text-white">
    <div class="container">
        <div class="row blog-row">
            <div class="col-lg-6">
                <?php // Primer post (elemento principal)
                if ($blog_query->have_posts()):

                    $blog_query->the_post();
                    $post_counter++;
                    ?>
                <div
                    class="blog-main-item"
                    style="background: url('<?php echo get_the_post_thumbnail_url(
                        get_the_ID(),
                        "home-blog"
                    ); ?>') no-repeat;"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <div class="overlay"></div>
                    <p>
                        <a href="<?php echo get_category_link(
                            get_cat_ID("blog")
                        ); ?>">Blog</a>
                    </p>
                    <a href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg rounded-pill">Leer artículo</a>
                </div>
                <?php
                endif; ?>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <!-- Elemento estático (sin cambios) -->
                        <div class="blog-secondary-item blog-secondary-item-sin-overlay"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100">
                            <div id="batidora" class="elemento-parallax"></div>
                            <h1>Secretos de Cocina y Repostería</h1>
                            <a href="<?php echo get_category_link(
                                get_cat_ID("blog")
                            ); ?>" class="btn btn-secondary btn-lg rounded-pill">Ver todos los blogs</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php // Segundo y tercer post
                    while ($blog_query->have_posts()):

                        $blog_query->the_post();
                        $post_counter++;
                        ?>
                    <div class="col-lg-6">
                        <div
                            class="blog-secondary-item"
                            style="background: url('<?php echo get_the_post_thumbnail_url(
                                get_the_ID(),
                                "home-blog"
                            ); ?>') no-repeat;"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo $post_counter * 100; ?>"
                        >
                            <div class="overlay"></div>
                            <p>
                                <a href="<?php echo get_category_link(
                                    get_cat_ID("blog")
                                ); ?>">Blog</a>
                            </p>
                            <a href="<?php the_permalink(); ?>">
                                <h1><?php the_title(); ?></h1>
                            </a>
                            <p><?php echo wp_trim_words(
                                get_the_excerpt(),
                                20
                            ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill">Leer artículo</a>
                        </div>
                    </div>
                    <?php
                    endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;
wp_reset_postdata();
?>
