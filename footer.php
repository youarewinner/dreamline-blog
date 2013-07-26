<?php
/**
 * The template for displaying the footer.
 * twenty Eleven 
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
<?php if(function_exists('wp_paginator')) { wp_paginator(); } ?> 
			<div id="site-generator">
				▶ 관리자 : <a href="mailto:youarewinner@naver.com">이메일보내기</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>