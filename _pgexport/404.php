<?php get_header(); ?>

<section class="container-404 custom-gradient-form overflow-hidden">
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/fumee_logo_navbar.png" alt="Fumee logo" id="header-logo"> 
        </div>                 
    </nav>
    <div class="container-fluid">
        <p><?php _e( 'Oj, chyba coś poszło nie tak!', 'fumee' ); ?></p><span><?php _e( 'Nie znaleźliśmy strony, której szukasz.', 'fumee' ); ?></span>
    </div>
    <div class="row"> 
        <div class="col-lg-3 col-md-6 order-lg-1 order-md-first"></div>                 
        <div class="col-lg-9 col-mdms-auto order-lg-2 order-md-1 text-end">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/404.png" id="error404">
        </div>
    </div>
</section>        

<?php get_footer(); ?>