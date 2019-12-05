<?php get_header() ?>
<div>
    <button class="Homepage-HomepageNavigationMenu-button" aria-label="Open Navigation Menu" onclick="openSidenav(this)"><span class="Icon-Menu">
            <!-- <svg width="28" height="17" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 14h13a1.5 1.5 0 0 1 0 3h-13a1.5 1.5 0 0 1 0-3zm0-7h25a1.5 1.5 0 0 1 0 3h-25a1.5 1.5 0 0 1 0-3zm0-7h22a1.5 1.5 0 0 1 0 3h-22a1.5 1.5 0 0 1 0-3z" fill="currentColor" fill-rule="evenodd" /></svg> -->
        </span></button>
</div>
<div class="page-not-found">
    <div class="container">
        <div class="row">
            <div class="col-11 py-5 offset-1">
                <div class="page-not-found-separator">ERREUR 404</div>
                <h1 class="font-weight-bold display-4 page-not-found-title">Page non trouvée</h1>
                <div class="py-1 h4">
                    Nous n'avons rien trouvé à cette adresse. S'il vous plaît vérifier l'URL ou aller à la <a href="<?php echo site_url('/') ?>" class="">page d'accueil</a>.
                </div>
            </div>
        </div>
    </div>
</div>