<?php /*
Theme Name: theme-wp
Author: Queseo
Author URI: http://queseo.es/
Description: My first responsive HTML5 theme
Version: 1.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/
?>
	<div class="widget-footer">
		<div class="container">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			    <?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			    <?php dynamic_sidebar( 'footer-2' ); ?>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			    <?php dynamic_sidebar( 'footer-3' ); ?>
			<?php endif; ?>		
		</div>
	</div>
	<footer>
    	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </footer>
    <?php wp_footer(); ?>

  </body>
</html>