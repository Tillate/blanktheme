<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blanktheme
 */

?>


<article class="article-category"id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title article-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta article-author">
				<?php
				blanktheme_posted_on();
				blanktheme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php blanktheme_post_thumbnail(); ?>

	<div class="entry-content article-container">
			<div class="article-content"> 
				<img src="<?php the_field('image_article'); ?>" alt="" width="300px" height="190px">
				<h3><?php the_field('titre_test'); ?></h3>
				<p><?php the_field('texte_article'); ?></p>
				<?php the_title( '<a href="' . esc_url( get_permalink() ) . '">Lire la suite ></a>' );?>
				
			</div>
		<?php
		
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blanktheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),

				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blanktheme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		{# <?php blanktheme_entry_footer(); ?> #}
	</footer>--><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


