<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanktheme
 */

?>

	<footer id="colophon" class="site-footer">
			<div class="container-footer">
					<img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="logo-footer" alt="...">
					<div class="col">A propos</div>
					<div class="col">L'Entreprise</div>
					<div class="col">Contact</div>
			</div>
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
