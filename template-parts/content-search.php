<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indep@home
 */

?>
<?php $hide_page_title = get_post_meta( get_the_ID(), 'hide_page_title', true );?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (!$hide_page_title){ the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); }?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php independantathome_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php independantathome_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
