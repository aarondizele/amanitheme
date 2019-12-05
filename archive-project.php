<?php get_header(); ?>

<h1>All projects</h1>
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

<?php get_footer(); ?>