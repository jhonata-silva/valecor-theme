<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    get_template_part( 'inc/head-includ' );
    wp_head();
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
</head>
<body <?php body_class(); ?>>

<?php
if ( is_front_page() ) {
    // Inclua o arquivo diretamente do diretório 'inc'
    include get_template_directory() . '/inc/header-home.php';
} elseif ( is_page( array( 'sobre', 'contato' ) ) ) {
    // Inclua o arquivo padrão para outras páginas
    include get_template_directory() . '/inc/header-paginas.php';
}

?>

