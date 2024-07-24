<style type="text/css">
.header-home {
    background-color: <?php the_field('cor_principal', 'option'); ?>;
}
.cab01 {
    background-color: <?php the_field('cor_segundaria', 'option'); ?>;
}

.menu li a {
    color: <?php the_field('cor_principal_menu', 'option'); ?>;
}
.menu li a:hover {
    color: <?php the_field('cor_secundaria_menu', 'option'); ?>;
}
</style>

<nav class="cab01"> <!--linha verde-->
    <div class=""></div>
</nav>

<header class="header-home"> <!-- Cabeçalho-->
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <a href="<?php echo esc_url(home_url('/')); ?>">
           <?php 
                $logo = get_field('logo_do_site', 'option');
                if( !empty( $logo ) ): ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; 
            ?>
        </a>

        <div>
            <?php wp_nav_menu(array(
                'theme_location' => 'MenuPrincipal',
                'container_class' => 'menu'
            )); ?>

        </div>
    </div>
</header>