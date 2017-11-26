<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>


		<?php while (have_posts()) : the_post(); ?>


			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            	<div class="post_date">
                    <span class="day"><?php the_time('d') ?></span><br />
                    <span class="month"><?php the_time('M') ?></span><br />
                    <span class="year"><?php the_time('Y') ?></span>
                </div>
                
                <div class="post_content">
                
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="comm"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
    
                    <div class="entry">
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                
                <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> </p>
                <div class="read_more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">read more</a></div>
                </div>

				
			</div>


		<?php endwhile; ?>

		<?php if(function_exists('wp_pagenavi')) {   ?>
        <div class="new_pagination">
		<?php wp_pagenavi(); ?>
        </div>
        <?php
		}
		else {
		?>
        
        <div class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>
        
        <?php } ?>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>


	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
