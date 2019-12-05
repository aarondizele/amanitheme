<?php
$menus = array(
    array(
        'name' => 'Accueil',
        'to' => ''
    ),
    array(
        'name' => 'Societe',
        'to' => '/societe'
    ),
    array(
        'name' => 'Societe',
        'to' => '/societe'
    ),
);

echo "<ul>";

foreach ($menus as $menu) {
    ?> <?php
            echo "<li><a href=" . site_url('/' . $menu['to']) . " class=''>" . $menu['name'] . "</a></li>";
        }

        echo "</ul>";

        ?>





<nav class="navbar navbar-expand-lg shadow-sm navbar-light bg-white">
    <a href="<?php echo site_url('/') ?>" class="navbar-brand">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" style="width:120px!important" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li <?php if (is_front_page()) {
                    echo ('class="nav-item active"');
                } else {
                    echo ('class="nav-item"');
                }
                ?>>
                <a class="nav-link" href="<?php echo site_url('') ?>">Accueil </a>
            </li>
            <li <?php if (get_post_type() == 'project') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/projects') ?>">Projects</a>
            </li>
            <li <?php if (get_post_type() == 'post') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
            </li>
            <li <?php if (is_page('nous-contacter') && is_category('musique')) {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/nous-contacter') ?>">Nous contacter</a>
            </li>
        </ul>
    </div>
</nav>

<li><a href="<?php echo site_url('/category/economie/') ?>" <?php if (is_category() == 'economie') echo 'class="active"' ?>>Economie</a></li>
<li><a href="<?php echo site_url('/category/societe/') ?>" <?php if (is_category() == 'societe') echo 'class="active"' ?>>Société</a></li>
<li><a href="<?php echo site_url('/category/internationales/') ?>" <?php if (is_category() == 'internationales') echo 'class="active"' ?>>Internationales</a></li>
<li><a href="<?php echo site_url('/category/sport/') ?>" <?php if (is_category() == 'sport') echo 'class="active"' ?>>Sport</a></li>
<li><a href="<?php echo site_url('/category/culture/') ?>" <?php if (is_category() == 'culture') echo 'class="active"' ?>>Culture</a></li>
<li><a href="<?php echo site_url('/category/environnement/') ?>" <?php if (is_category() == 'environnement') echo 'class="active"' ?>>Environnement</a></li>
<li><a href="<?php echo site_url('/category/musique/') ?>" <?php if (is_category() == 'musique') echo 'class="active"' ?>>Musique</a></li>

<main class="container">




    <?php get_header(); ?>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="carousel-header">
                <div>
                    <h1>Slide 1</h1>
                </div>
                <div>
                    <h1>Slide 2</h1>
                </div>
                <div>
                    <h1>Slide 3</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 10,
            // 'category_name' => 'economie'
        );

        $blog_posts = new WP_Query($args);

        while ($blog_posts->have_posts()) {
            $blog_posts->the_post();

            ?>
            <div class="col-12 col-md-6">
                <div class="card">
                    <img class="card-img-top _card-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="">
                    <div class="card-body">
                        <a href="<?php the_permalink() ?>" class="">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                        </a>
                        <p class=""><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_query(); ?>
    </div>

    <h1 class="my-5 font-weight-bold">All posts</h1>

    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
        );

        $blog_posts = new WP_Query($args);

        while ($blog_posts->have_posts()) {
            $blog_posts->the_post();

            ?>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php the_permalink() ?>" class="">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="">
                        <p class=""><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_query(); ?>
    </div>

    <?php get_footer(); ?>



    <!-- </main>
<footer>
    <div class="left-footer">
        <h3>Quick Links</h3>
        <p>
            <ul>
                <li><a href="<?php echo site_url('') ?>">Accueil</a></li>
                <li><a href="<?php echo site_url('/nous-contacter') ?>">Nous contacter</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/projects') ?>">Projects</a></li>
            </ul>
        </p>
    </div>
    <div class="right-footer"></div>
</footer> -->

    <!-- Archive -->



    <?php get_header(); ?>

    <h1><?php the_archive_title() ?></h1>
    <?php

    while (have_posts()) {
        the_post();

        ?>
        <a href="<?php the_permalink() ?>" class="">
            <h2><?php the_title(); ?></h2>
        </a>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="">
        <p class=""><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
    <?php }
    wp_reset_query(); ?>

    <div class="pagination">
        <?php echo paginate_links() ?>
    </div>

    <section id="sidebar">
        <?php dynamic_sidebar('main_sidebar') ?>
    </section>
    <?php get_footer(); ?>