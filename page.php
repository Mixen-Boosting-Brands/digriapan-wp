<?php get_header(); ?>

    <section id="jumbotron-interna" class="<?php if (is_woocommerce()) {
        echo "bg-primary";
    } ?> text-white" <?php if (is_page() && !is_woocommerce()) {
     // Verifica si es página pero NO es de WooCommerce
     echo 'style="background: url(' .
         get_the_post_thumbnail_url(get_the_ID(), "full") .
         ') no-repeat; background-size: cover;"';
 } ?>>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-4" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0">
                        <?php if (is_cart()) {
                            echo "Carrito de Compras";
                        } elseif (is_checkout()) {
                            echo "Finalizar Compra";
                        } elseif (is_account_page()) {
                            echo "Mi Cuenta";
                        } else {
                            the_title();
                        } ?>
                    </h1>
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
                    <div class="col <?php echo is_woocommerce()
                        ? "col-12"
                        : "col-lg-9 offset-lg-2"; ?>">
                        <?php the_content(); ?>

                        <?php if (!is_woocommerce()): ?>
                            <?php edit_post_link(); ?>
                        <?php endif; ?>
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
