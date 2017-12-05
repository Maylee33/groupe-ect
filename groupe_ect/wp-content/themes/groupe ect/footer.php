<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Groupe_ECT
 */

?>
</div>
	</div><!-- #content -->

	<footer id="footer">
		<div class="site-info">
		

            		<a href="<?php echo esc_url( home_url( '/mentions-legales', 'groupe-ect' ) ); ?>">Mentions Légales</a>
        			<span class="sep"> - </span>
                    <a href="<?php echo esc_url( home_url( '/contact', 'groupe-ect' ) ); ?>">Contact</a>
        			<span class="sep"> - </span>
        			<a href="<?php echo esc_url( __( 'http://maylisjuzan.fr/', 'groupe-ect' ) ); ?>"><?php

        				printf( esc_html__( 'Réalisation : Maylis JUZAN', 'groupe-ect' ), 'WordPress' );?></a>
        			<span class="sep"> - </span>
                    <span>&copy; ECT - <?php the_date('Y'); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
