<!-- Newsletter -->
<div class="newsletter">
    <form>
        <div class="logo-box">Amani Media</div>
        <div class="content-box">
            <h1 class="">S'abonner à la Newsletter</h1>
            <h1 class="fg-primary">Société, Economie, Finance, Culture, Musique, Sport. Livré pour vous.</h1>
        </div>
        <div class="input-box">
            <input type="text" name="" id="" placeholder="Entrer votre adresse email">
            <button type="submit">S'abonner</button>
        </div>
    </form>
</div>
</main>


<footer>
    <div class="main">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1 mt-3">
                <a href="<?php echo site_url('') ?>" class="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo" class="footer__logo">
                </a>
                <ul class="list-unstyled _flex mt-3">
                    <li class="facebook mr-2" style="width:30px;color:#3b5998;">
                        <a target="_blank" title="Facebook" href="http://facebook.com">
                            <i class="fab fa-facebook" style="font-size:24px"></i>
                        </a>
                    </li>
                    <li class="twitter mr-2" style="width:30px;color:#00acee;">
                        <a target="_blank" title="Twitter" href="http://twitter.com/">
                            <i class="fab fa-twitter" style="font-size:24px"></i>
                        </a>
                    </li>
                    <li class="vimeo mr-2" style="width:30px;color:#0e76a8;">
                        <a target="_blank" title="Vimeo" href="http://linkedin.com/">
                            <i class="fab fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </li>
                </ul>
                <p class="allRightReserved">&copy; Amani Media. Tous droits reservés</p>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled d-flex flex-row align-items-center flex-wrap mb-0">
                            <li><a href="<?php echo site_url('/') ?>" class="">À propos</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Editorial policies</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Join newsletter</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Devenir membre</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('/') ?>" class="">Conditions d'utilisation</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Privacy</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Sitemap</a></li>
                            <li><a href="<?php echo site_url('/') ?>" class="">Devenir membre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<?php wp_footer() ?>
</body>

</html>