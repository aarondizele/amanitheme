<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/x-icon" />
    <?php wp_head() ?>
</head>

<body>
    <div class="NavigationMenu-sidenav">
        <button class="NavigationMenu-closeButton" tabindex="0" role="button" aria-label="Close Navigation Menu" onclick="closeSidenav(this)">
            <span class="Icon-Icon Icon-icon-TI_Cross"></span>
        </button>
        <a role="link" class="elements-Logo-logo elements-Logo-light NavigationMenu-logo" href="/">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo" class="footer__logo">
        </a>
        <div class="NavigationMenu-search">
            <form action="/search" type="get">
                <label class="NavigationMenu-searchLabel" for="search">
                    <span class="Icon-Icon Icon-icon-TI_Search NavigationMenu-searchIcon"></span>
                    <input id="search" class="NavigationMenu-searchInput" name="s" value />
                </label>
            </form>
        </div>
        <div class="NavigationMenu-lists">
            <ul class="list-unstyled text-uppercase">
                <?php
                $menuOne = array(
                    array(
                        'name' => 'Accueil',
                        'route' => "/",
                        'categorie' => ''
                    ),
                    array(
                        'name' => 'Economie',
                        'route' => "/category/economie",
                        'categorie' => 'economie'
                    ),
                    array(
                        'name' => 'Société',
                        'route' => "/category/societe",
                        'categorie' => 'societe'
                    ),
                    array(
                        'name' => 'Internationales',
                        'route' => "/category/internationales",
                        'categorie' => 'internationales'
                    ),
                    array(
                        'name' => 'Sport',
                        'route' => "/category/sport",
                        'categorie' => 'sport'
                    ),
                    array(
                        'name' => 'Culture',
                        'route' => "/category/culture",
                        'categorie' => 'culture'
                    ),
                    array(
                        'name' => 'Environnement',
                        'route' => "/category/environnement",
                        'categorie' => 'environnement'
                    ),
                    array(
                        'name' => 'Musique',
                        'route' => "/category/musique",
                        'categorie' => 'musique'
                    ),
                );

                foreach ($menuOne as $menu) { ?>
                <?php
                    echo "<li class='NavigationMenu-NavigationMenuListItems-listItem'>
                            <a href=" . site_url('/' . $menu['route']) . " class='NavigationMenu-NavigationMenuListItems-menuLink'>" . $menu['name'] . "</a>
                        </li>";
                }  ?>
            </ul>
            <ul class="list-unstyled text-uppercase">
                <?php
                $menuTwo = array(
                    array(
                        'name' => 'Annonce des ventes',
                        'route' => "/category/annonce-des-vente"
                    ),
                    array(
                        'name' => 'Appels d\'offre',
                        'route' => "/category/appels-d-offre"
                    ),
                );

                foreach ($menuTwo as $menu) { ?>
                <?php
                    echo "<li class='NavigationMenu-NavigationMenuListItems-listItem'>
                            <a href=" . site_url('/' . $menu['route']) . " class='NavigationMenu-NavigationMenuListItems-menuLink'>" . $menu['name'] . "</a>
                        </li>";
                }  ?>
            </ul>
            <ul class="list-unstyled text-uppercase">
                <?php
                $menuThree = array(
                    array(
                        'name' => 'À propos',
                        'route' => "/a-propos"
                    ),
                    array(
                        'name' => 'Nous contacter',
                        'route' => "/nous-contacter"
                    ),
                );

                foreach ($menuThree as $menu) { ?>
                <?php
                    echo "<li class='NavigationMenu-NavigationMenuListItems-listItem'>
                            <a href=" . site_url('/' . $menu['route']) . " class='NavigationMenu-NavigationMenuListItems-menuLink'>" . $menu['name'] . "</a>
                        </li>";
                }  ?>
            </ul>
        </div>
    </div>