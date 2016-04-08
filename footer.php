<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indep@home
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-inner">
			</div>
</div>
<?php } ?>
	<div id="footer-wrapper"><footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-inner">
<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 sign">
<?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
	<div id="footer-1-widgets">
		<?php dynamic_sidebar( 'footer_widget_1' ); ?>
	</div>
<?php endif; ?>
</div><!--footer1-->

	<div class="col-xs-12 col-sm-6 col-md-3 contact-info">

<?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
	<div id="footer-2-widgets">
		<?php dynamic_sidebar( 'footer_widget_2' ); ?>
	</div>
<?php endif; ?>
</div><!--footer2-->

<div class="col-xs-12 col-md-6 help-you">

<?php if ( is_active_sidebar( 'footer_widget_3' ) ) : ?>
	<div id="footer-3-widgets">
		<?php dynamic_sidebar( 'footer_widget_3' ); ?>
	</div>
<?php endif; ?>
</div><!--footer3-->

<div class="col-xs-12 col-lg-9 col-lg-offset-3 number-four">

<?php if ( is_active_sidebar( 'footer_widget_4' ) ) : ?>
	<div id="footer-4-widgets">
		<?php dynamic_sidebar( 'footer_widget_4' ); ?>
	</div>
<?php endif; ?>
</div><!--footer4-->

</div><!--.row-->
	</div> <!-- .footer-inner -->
		<div class="site-info">
<?php if ( is_active_sidebar( 'footer_copyright' ) ) : ?>
	<div id="footer_copyright-widgets">
		<?php dynamic_sidebar( 'footer_copyright' ); ?>
	</div>
<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
