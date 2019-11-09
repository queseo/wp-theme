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

<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no page was found!</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>