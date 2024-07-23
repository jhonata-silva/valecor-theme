<!--Cabeçalho-->
<header class="header-paginas"> <!-- Cabeçalho-->
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <a href="index.php">
            <img src="<?php echo get_stylesheet_directory_uri() ?>\assets\img\logo cabecalho.png" alt="Logo" class="img-fluid">
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