<?php get_header() ?>
<div>
    <button class="Homepage-HomepageNavigationMenu-button" aria-label="Open Navigation Menu" onclick="openSidenav(this)"><span class="Icon-Icon">
            <svg width="28" height="17" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 14h13a1.5 1.5 0 0 1 0 3h-13a1.5 1.5 0 0 1 0-3zm0-7h25a1.5 1.5 0 0 1 0 3h-25a1.5 1.5 0 0 1 0-3zm0-7h22a1.5 1.5 0 0 1 0 3h-22a1.5 1.5 0 0 1 0-3z" fill="currentColor" fill-rule="evenodd" /></svg>
        </span></button>
</div>

<!-- Header -->
<div class="carousel-header">
    <?php
    $category = get_category(get_query_var('cat'));
    $cat_name = get_cat_name($category->cat_ID);
    $args = array(
        'posts_per_page' => 10,
        'category_name' => $cat_name
    );

    $blog_posts = new WP_Query($args);

    while ($blog_posts->have_posts()) {
        $blog_posts->the_post();

        ?>
        <div class="header__container">
            <div class="header__content">
                <div class="header__category">
                    <?php if (get_post_type() == 'post') { ?>
                        <a href="" class=""><?php echo get_the_category_list(', ') ?> </a>
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

    <!-- Main -->
    <div class="row">
        <div class="col-12 col-lg-8">
            <!-- Current Category -->
            <div>
                <h2 class="font-weight-bold society__title"><?php single_cat_title() ?></h2>
                <!--  -->
                <div class="row">
                    <?php

                    $category = get_category(get_query_var('cat'));
                    $cat_name = get_cat_name($category->cat_ID);

                    $args = array(
                        'posts_per_page' => 2,
                        'category_name' => $cat_name
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

                    $category = get_category(get_query_var('cat'));
                    $cat_name = get_cat_name($category->cat_ID);

                    $args = array(
                        'posts_per_page' => 10,
                        'offset' => 2,
                        'category_name' => $cat_name
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
            <!-- Pagination -->
            <div class="pagination mt-4">
                <?php echo paginate_links() ?>
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