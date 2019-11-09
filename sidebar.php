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

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>