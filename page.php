<?php
get_header();

while (have_posts()) {
    the_post();
    ?>

    <h2><?php the_title() ?></h2>
    <?php if (has_post_thumbnail()) { ?>

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="">
    <?php } ?>
    <p class=""><?php the_content() ?></p>


<?php
}
?>
<?php get_footer(); ?>