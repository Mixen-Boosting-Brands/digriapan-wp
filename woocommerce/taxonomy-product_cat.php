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
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="700"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div
                            class="card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="800"
                        >
                            <a href="#">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/categorias-productos/1@2x.png"
                                    class="card-img-top"
                                    alt=""
                                />
                            </a>
                            <div class="card-body d-grid text-start">
                                <a href="#"
                                    >Chips sabor chocolate para
                                    hornear</a
                                >
                                <small class="text-body-secondary my-2">
                                    Alpezzi<br />
                                    1 kg.
                                </small>
                                <p class="fw-bold precio">
                                    $349.46 MXN
                                </p>
                                <a href="#" class="btn btn-primary"
                                    ><i
                                        class="fa-solid fa-cart-shopping"
                                    ></i>
                                    Agregar al carrito</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Aquí va navegación de productos
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
