<!--Cabeçalho-->
<header class="header-paginas"> <!-- Cabeçalho-->
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
<!--Fechar Cabeçalho-->