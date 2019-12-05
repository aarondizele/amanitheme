<?php get_header() ?>
<div>
    <button class="Homepage-HomepageNavigationMenu-button" aria-label="Open Navigation Menu" onclick="openSidenav(this)"><span class="Icon-Menu">
            <!-- <svg width="28" height="17" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 14h13a1.5 1.5 0 0 1 0 3h-13a1.5 1.5 0 0 1 0-3zm0-7h25a1.5 1.5 0 0 1 0 3h-25a1.5 1.5 0 0 1 0-3zm0-7h22a1.5 1.5 0 0 1 0 3h-22a1.5 1.5 0 0 1 0-3z" fill="currentColor" fill-rule="evenodd" /></svg> -->
        </span></button>
</div>
<!-- Header -->
<div class="carousel-header">

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
    );

    $blog_posts = new WP_Query($args);

    while ($blog_posts->have_posts()) {
        $blog_posts->the_post();

        ?>
        <div class="header__container">
            <div class="header__content">
                <div class="header__category">
                    <?php if (get_post_type() == 'post') { ?>
                        <a href="" class="">#<?php echo get_the_category_list(' #') ?> </a>
                    <?php } ?>
                </div>
                <a href="<?php the_permalink() ?>">
                    <div class="header__title">
                        <?php the_title(); ?>
                    </div>
                </a>
                <div class="header__date">
                    <?php the_time('F j, Y') ?>
                </div>
            </div>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="header__image">
            <div class="header__overlay"></div>
        </div>
    <?php }
    wp_reset_query(); ?>
</div>
<!-- Navigation -->
<nav class="navigation d-none d-lg-flex">
    <ul>
        <li><a href="<?php echo site_url('/category/economie/') ?>" class='<?php if (is_category('economie')) echo 'active' ?>'>Economie</a></li>
        <li><a href="<?php echo site_url('/category/societe/') ?>" class='<?php if (is_category('societe')) echo 'active' ?>'>Société</a></li>
        <li><a href="<?php echo site_url('/category/internationales/') ?>" class='<?php if (is_category('internationales')) echo 'active' ?>'>Internationales</a></li>
        <li><a href="<?php echo site_url('/category/sport/') ?>" class='<?php if (is_category('sport')) echo 'active' ?>'>Sport</a></li>
        <li><a href="<?php echo site_url('/category/culture/') ?>" class='<?php if (is_category('culture')) echo 'active' ?>'>Culture</a></li>
        <li><a href="<?php echo site_url('/category/environnement/') ?>" class='<?php if (is_category('environnement')) echo 'active' ?>'>Environnement</a></li>
        <li><a href="<?php echo site_url('/category/musique/') ?>" class='<?php if (is_category('musique')) echo 'active' ?>'>Musique</a></li>
    </ul>
    <ul>
        <li class='<?php if (is_category('annonces-de-vente')) echo 'active' ?>'>Annonces de vente</li>
        <li class="navigation__about"><a href="" class="">À propos</a></li>
    </ul>
</nav>

<main>
    <!-- Search -->
    <div class="search__box">
        <input type="text" placeholder="Trouver une publication">
        <button type="submit">Rechercher</button>
    </div>

    <!-- Primary Main -->
    <div class="mb-5">
        <h2 class="font-weight-bold society__title">Société</h2>
        <div class="row">
            <!-- Left Side -->
            <div class="col-12 col-md-6 col-lg-8 society__first">
                <div>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <a href="<?php the_permalink() ?>" class="society__first_image">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="society__first_image">
                        </a>
                        <a href="<?php the_permalink() ?>">
                            <h3 class="font-weight-bold society__first_title"><?php the_title(); ?></h3>
                        </a>
                        <div class="post__date"><?php the_time('F j, Y') ?></div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Right Side -->
            <div class="col-12 col-md-6 col-lg-4">
                <ul class="list-unstyled m-0 p-0 society__second_list">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'offset' => 1
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <li class="society__second">
                            <div class="society__second_image">
                                <a href="<?php the_permalink() ?>" class="">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="">
                                </a>
                            </div>
                            <div class="society__second_content">
                                <a href="<?php the_permalink() ?>" class="">
                                    <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                                </a>
                                <div class="header__date"><?php the_time('F j, Y') ?></div>
                            </div>
                        </li>
                    <?php }
                    wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div class="row">
        <div class="col-12 col-lg-8">
            <!-- Economie -->
            <div>
                <h2 class="font-weight-bold society__title">Economie</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category_name' => 'economie'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php the_permalink() ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="society__first post_category_header_image">
                            </a>
                            <h5 class="post_category_header_title"><?php the_title(); ?></h5>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
                <!--  -->
                <div class="row mt-4">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'offset' => 2,
                        'category_name' => 'economie'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <div class="post__second">
                                <div class="post__second_image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="post__second_image">
                                </div>
                                <div class="post__second_content">
                                    <h6 class="post__second_title"><?php the_title(); ?></h6>
                                    <div class="post__date"><?php the_time('F j, Y') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Culture -->
            <div>
                <h2 class="font-weight-bold society__title">Culture</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category_name' => 'culture'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php the_permalink() ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="society__first post_category_header_image">
                            </a>
                            <h5 class="post_category_header_title"><?php the_title(); ?></h5>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
                <!--  -->
                <div class="row mt-4">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'offset' => 2,
                        'category_name' => 'culture'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <div class="post__second">
                                <div class="post__second_image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="post__second_image">
                                </div>
                                <div class="post__second_content">
                                    <h6 class="post__second_title"><?php the_title(); ?></h6>
                                    <div class="post__date"><?php the_time('F j, Y') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Sport -->
            <div>
                <h2 class="font-weight-bold society__title">Sport</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category_name' => 'sport'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php the_permalink() ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="society__first post_category_header_image">
                            </a>
                            <h5 class="post_category_header_title"><?php the_title(); ?></h5>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
                <!--  -->
                <div class="row mt-4">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'offset' => 2,
                        'category_name' => 'sport'
                    );

                    $blog_posts = new WP_Query($args);

                    while ($blog_posts->have_posts()) {
                        $blog_posts->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <div class="post__second">
                                <div class="post__second_image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="post__second_image">
                                </div>
                                <div class="post__second_content">
                                    <h6 class="post__second_title"><?php the_title(); ?></h6>
                                    <div class="post__date"><?php the_time('F j, Y') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Internationales -->
            <div>
                <h2 class="font-weight-bold society__title">Internationales</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category_name' => 'internationales'
                    );

                    $internationales = new WP_Query($args);

                    while ($internationales->have_posts()) {
                        $internationales->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php the_permalink() ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="society__first post_category_header_image">
                            </a>
                            <h5 class="post_category_header_title"><?php the_title(); ?></h5>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
                <!--  -->
                <div class="row mt-4">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'offset' => 2,
                        'category_name' => 'internationales'
                    );

                    $internationales_more = new WP_Query($args);

                    while ($internationales_more->have_posts()) {
                        $internationales_more->the_post();

                        ?>
                        <div class="col-12 col-md-6">
                            <div class="post__second">
                                <div class="post__second_image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="post__second_image">
                                </div>
                                <div class="post__second_content">
                                    <h6 class="post__second_title"><?php the_title(); ?></h6>
                                    <div class="post__date"><?php the_time('F j, Y') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Appels d'offre -->
            <div>
                <h2 class="font-weight-bold society__title">Appels d'offre</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'category_name' => 'appels-doffres'
                    );

                    $appelsdoffre = new WP_Query($args);

                    while ($appelsdoffre->have_posts()) {
                        $appelsdoffre->the_post();

                        ?>
                        <div class="col-12 col-md-6 mb-4">
                            <h5 class="society__first post_category_header_title">
                                <a href="<?php the_permalink() ?>" class=""><?php the_title(); ?></a>
                            </h5>
                            <p class="mt-3 mb-1"><?php echo wp_trim_words(get_the_exceprt(), 120) ?>
                            </p>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
            <!-- Offres d'emploi -->
            <div>
                <h2 class="font-weight-bold society__title">Offres d'emploi</h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'category_name' => 'offres-demploi'
                    );

                    $offresdemploi = new WP_Query($args);

                    while ($offresdemploi->have_posts()) {
                        $offresdemploi->the_post();

                        ?>
                        <div class="col-12 col-md-6 mb-4">
                            <h5 class="society__first post_category_header_title"><a href="<?php the_permalink() ?>" class=""><?php the_title(); ?></a></h5>
                            <p class="mt-3 mb-1"><?php echo wp_trim_words(get_the_exceprt(), 120) ?>
                            </p>
                            <div class="post__date"><?php the_time('F j, Y') ?></div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="col-12 col-lg-3 offset-lg-1 mt-4">
            <div class="">
                <h4 class="sidebar__title">Vos annonces</h4>
                <ul class="sidebar__list">
                    <li>Poster une annonce</li>
                    <li>Immobiliers</li>
                    <li>Véhicules</li>
                    <li>Habillement</li>
                    <li>Informatique</li>
                    <li>Multimédia</li>
                    <li>Loisirs</li>
                    <li>Autres produits</li>
                </ul>
            </div>
            <div class="sidebar__separator mt-4">
                <h4 class="sidebar__title">Opportunités</h4>
                <ul class="sidebar__list">
                    <li>Offres d'emploi</li>
                    <li>Appels d'offre</li>
                </ul>
            </div>
        </div>
    </div>

    <?php get_footer() ?>