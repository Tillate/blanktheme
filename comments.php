<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blanktheme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="container">

			<h2 class="comments-title">
				<?php
				$blanktheme_comment_count = get_comments_number();
				if ( '1' === $blanktheme_comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'Un commentaire sur &ldquo;%1$s&rdquo;', 'blanktheme' ),
						'<span>' . wp_kses_post( get_the_title() ) . '</span>'
					);
				} else {
					printf( 
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s commentaire sur &ldquo;%2$s&rdquo;', '%1$s commentaires sur &ldquo;%2$s&rdquo;', $blanktheme_comment_count, 'comments title', 'blanktheme' ) ),
						number_format_i18n( $blanktheme_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						'<span>' . wp_kses_post( get_the_title() ) . '</span>'
					);
				}
				?>
			</h2><!-- .comments-title -->
			
			<?php the_comments_navigation(); ?>
			<div class="comment-container">

					<li class="comment-list">
						<?php
					wp_list_comments(
						array(
							'style'      => 'li',
							'short_ping' => true,
							)
						);
						?>
					</li><!-- .comment-list -->
			</div>
			
			<?php
		the_comments_navigation();
		
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Commentaires fermés.', 'blanktheme' ); ?></p>

		<?php
			endif;
			
		endif; // Check for have_comments().
		
		comment_form();
		?>
</div>

</div><!-- #comments -->
