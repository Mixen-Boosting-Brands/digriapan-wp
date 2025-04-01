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
                    <?php
                    $term = get_queried_object();
                    if ($term && !is_wp_error($term)) {
                        echo "<h1>" . esc_html($term->name) . "</h1>";
                    }
                    ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="productos" class="py-60">
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
                    <?php
                    $product_categories = get_terms([
                        "taxonomy" => "product_cat",
                        "hide_empty" => true,
                    ]);

                    if (
                        !empty($product_categories) &&
                        !is_wp_error($product_categories)
                    ) {
                        foreach ($product_categories as $category) {
                            echo '<option value="' .
                                esc_url(get_term_link($category)) .
                                '">' .
                                esc_html($category->name) .
                                "</option>";
                        }
                    }
                    ?>
                </select>
                <ul
                    class="d-none d-lg-block"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <?php if (
                        !empty($product_categories) &&
                        !is_wp_error($product_categories)
                    ) {
                        foreach ($product_categories as $category) {
                            // Obtener la categoría actual del producto
                            $current_product_categories = get_the_terms(
                                get_the_ID(),
                                "product_cat"
                            );
                            $is_active = false;

                            if (
                                $current_product_categories &&
                                !is_wp_error($current_product_categories)
                            ) {
                                foreach (
                                    $current_product_categories
                                    as $current_cat
                                ) {
                                    if (
                                        $current_cat->term_id ===
                                        $category->term_id
                                    ) {
                                        $is_active = true;
                                        break;
                                    }
                                }
                            }

                            echo '<li><a href="' .
                                esc_url(get_term_link($category)) .
                                '"' .
                                ($is_active ? ' class="active"' : "") .
                                ">" .
                                esc_html($category->name) .
                                "</a></li>";
                        }
                    } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="row mb-4">
                    <?php
                    // Obtener la categoría actual
                    $current_category = get_queried_object();

                    // Argumentos para la consulta de productos
                    $args = [
                        "post_type" => "product",
                        "posts_per_page" => -1,
                        "tax_query" => [
                            [
                                "taxonomy" => "product_cat",
                                "field" => "term_id",
                                "terms" => $current_category->term_id,
                            ],
                        ],
                    ];

                    $products = new WP_Query($args);

                    if ($products->have_posts()):
                        $delay = 100;
                        while ($products->have_posts()):

                            $products->the_post();
                            global $product;
                            ?>
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card"
                                        data-aos="fade-up"
                                        data-aos-duration="1000"
                                        data-aos-delay="<?php echo $delay; ?>">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php echo get_the_post_thumbnail(
                                                get_the_ID(),
                                                "full",
                                                ["class" => "card-img-top"]
                                            ); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url(
                                                wc_placeholder_img_src()
                                            ); ?>" class="card-img-top" alt="<?php the_title(); ?>" />
                                        <?php endif; ?>
                                    </a>
                                    <div class="card-body d-grid text-start">
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                        <small class="text-body-secondary my-2">
                                            <?php echo $product->get_attribute(
                                                "marca"
                                            )
                                                ? $product->get_attribute(
                                                    "marca"
                                                )
                                                : ""; ?><br/>
                                            <?php echo $product->get_attribute(
                                                "peso"
                                            )
                                                ? $product->get_attribute(
                                                    "peso"
                                                )
                                                : ""; ?>
                                        </small>
                                        <p class="fw-bold precio">
                                            <?php echo $product->get_price_html(); ?>
                                        </p>
                                        <a href="<?php echo esc_url(
                                            $product->add_to_cart_url()
                                        ); ?>"
                                            class="btn btn-primary add_to_cart_button ajax_add_to_cart"
                                            data-product_id="<?php echo get_the_ID(); ?>"
                                            data-product_sku="<?php echo esc_attr(
                                                $product->get_sku()
                                            ); ?>">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            Agregar al carrito
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php $delay += 100;
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<div class="col"><p>No hay productos en esta categoría.</p></div>';
                    endif;
                    ?>
                </div>
                <div class="row">
                    <div class="col">
                        <div
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            <?php echo bootstrap_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
