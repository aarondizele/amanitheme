<?php get_header() ?>

<!-- Header -->
<div class="carousel-header">
    <?php
    $args = array(
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
<nav class="navigation">
    <ul>
        <li><a href="<?php echo site_url('/category/economie/') ?>" class="active">Economie</a></li>
        <li><a href="<?php echo site_url('/category/societe/') ?>" class="">Société</a></li>
        <li><a href="<?php echo site_url('/category/internationales/') ?>" class="">Internationales</a></li>
        <li><a href="<?php echo site_url('/category/sport/') ?>" class="">Sport</a></li>
        <li><a href="<?php echo site_url('/category/culture/') ?>" class="">Culture</a></li>
        <li><a href="<?php echo site_url('/category/environnement/') ?>" class="">Environnement</a></li>
        <li><a href="<?php echo site_url('/category/musique/') ?>" class="">Musique</a></li>
    </ul>
    <ul>
        <li>Annonces de vente</li>
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
                <h2 class="font-weight-bold society__title"><?php the_archive_title() ?></h2>
                <!--  -->
                <div class="row">
                    <?php
                    $args = array(
                        'posts_per_page' => 2,
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
                        'posts_per_page' => 10,
                        'offset' => 2,
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