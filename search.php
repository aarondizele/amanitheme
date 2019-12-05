<?php get_header(); ?>

<h1>Results pour <?php echo get_search_query() ?></h1>

<?php if (have_posts()) { ?>

    <?php

        while (have_posts()) {
            the_post();

            ?>
        <a href="<?php the_permalink() ?>" class="">
            <h2><?php the_title(); ?></h2>
        </a>
        <div>Publié par <?php the_author() ?> in <?php the_time('F j, Y') ?> <?php if (get_post_type() == 'post') { ?>
                in <a href="" class=""><?php echo get_the_category_list(', ') ?> </a>
            <?php } ?>
        </div>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="">
        <p class=""><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
    <?php }
        wp_reset_query(); ?>
<?php } else { ?>
    <h1><i class="">No results found</i></h1>
<?php } ?>

<div class="pagination">
    <?php echo paginate_links() ?>
</div>

<?php get_footer(); ?>