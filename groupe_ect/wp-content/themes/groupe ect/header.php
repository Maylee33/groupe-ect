<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Groupe_ECT
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='profile' href='http://gmpg.org/xfn/11'>
    <title><?php bloginfo('name') ?> - <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page">
<div id="header-img">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"rel="ECT - Retour à l'accueil" class="custom-logo-link"><?php the_custom_logo(); ?></a>
		<p id="header-p"><strong>ECT</strong> : <em id="header-em">le 1er groupe français de gestion et de stockage de matériaux inertes</em></p>

</div>

<nav id="menu">
<!-- <li class="vertbout "> -->
    <?php
        wp_nav_menu( [
            'theme_location' => 'menu-ect',
        ] );
        wp_nav_menu([
            'theme_location' => 'menu2',
            'menu_class' => 'menu2',
        ]);
        wp_nav_menu([
            'theme_location' => 'menu3',
            'menu_class' => 'menu3',
        ]);
        wp_nav_menu([
            'theme_location' => 'menu4',
            'menu_class' => 'menu4',
        ]);
        ?>
        <p class="nl">ENTREZ VOTRE EMAIL CI-DESSOUS POUR RECEVOIR NOS ALERTES :</p>
        <?php wp_nav_menu([
            'theme_location' => 'menu_nl',
            'menu_class' => 'menu_nl',
        ]);
        ?>
    <div id="sites"><a href="<?php echo esc_url( home_url('/nos-sites' )); ?>"title="voir la liste de nos sites" class="cart-img"></a></div>
</nav><!-- #site-navigation -->
	<div id="contenu">
