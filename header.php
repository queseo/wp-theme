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

<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <?php
		if( is_single()):?>
   			<link rel="stylesheet" href="<?php echo esc_url( home_url() ); ?>/wp-content/themes/theme-wp/blog.css"><?php ;
		else:?>
			<link rel="stylesheet" href="<?php echo esc_url( home_url() ); ?>/wp-content/themes/theme-wp/pages.css"><?php ;
		endif;
	?>
   <?php wp_head(); ?>

 </head>
 <body <?php body_class(); ?>>
    <header class="my-logo">
   		<div class="cont_head">
   			<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></span>
    		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
 	</header>
