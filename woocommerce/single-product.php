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

        <section id="single-product" class="py-60">
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
                                        !is_wp_error(
                                            $current_product_categories
                                        )
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
                        <?php woocommerce_content(); ?>
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
