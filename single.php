<?php get_header(); ?>
<div>
    <button class="Homepage-HomepageNavigationMenu-button" aria-label="Open Navigation Menu" onclick="openSidenav(this)"><span class="Icon-Menu">
            <!-- <svg width="28" height="17" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 14h13a1.5 1.5 0 0 1 0 3h-13a1.5 1.5 0 0 1 0-3zm0-7h25a1.5 1.5 0 0 1 0 3h-25a1.5 1.5 0 0 1 0-3zm0-7h22a1.5 1.5 0 0 1 0 3h-22a1.5 1.5 0 0 1 0-3z" fill="currentColor" fill-rule="evenodd" /></svg> -->
        </span></button>
</div>

<?php
while (have_posts()) {
    the_post();
    ?>
    <div class="single header__container">
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
    <!--  -->
    <main>
        <div class="row mt-4">
            <div class="col-12 col-md-8">
                <!-- <div class="mt-4">Publié par <?php the_author() ?> in <?php the_time('F j, Y') ?> <?php if (get_post_type() == 'post') { ?>
                    in <a href="" class=""><?php echo get_the_category_list(', ') ?> </a>
                <?php } ?>
            </div>
            <hr> -->
                <p><?php the_content(); ?></p>
                <hr />

                <?php
                    $fields = array(
                        'author' => '<input placeholder="Votre nom" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" ' . $aria_req . '/>',
                        'email' => '<input placeholder="Votre email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" ' . $aria_req . '/>'
                    );

                    $args = array(
                        'title_reply' => 'Commentaires',
                        'fields' => $fields,
                        'comment_field' => '<textarea placeholder="Votre commentaire" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
                        'comment_notes_before' => '<p class="comment-notes">Votre adresse email ne sera pas publiée. Tous les champs sont requis</p>'
                    );

                    comment_form($args);
                    $comments_number = get_comments_number();
                    if ($comments_number != 0) { ?>

                    <div class="comments">
                        <h3>Comments - <?php echo $comments_number ?></h3>
                        <ol class="">
                            <?php
                                    $comments = get_comments(array(
                                        'post_id' => $post->ID,
                                        'status' => 'approve'
                                    ));
                                    wp_list_comments(array(
                                        'per_page' => 15
                                    ), $comments);
                                    ?>
                        </ol>
                    </div>

                <?php } ?>
            <?php
            }
            ?>
            </div>
            <!--  -->
            <div class="col-12 col-md-4 col-lg-3 offset-lg-1">
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


        <!-- the_date() -->