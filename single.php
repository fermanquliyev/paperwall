<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            	<div class="post_date">
                    <span class="day"><?php the_time('d') ?></span><br />
                    <span class="month"><?php the_time('M') ?></span><br />
                    <span class="year"><?php the_time('Y') ?></span>
                </div>
                
                <div class="post_content">
                
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
    
                    <div class="entry">
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                
                <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> </p>
              
                </div>
		</div>
	
    <div class="comments_content">
	<?php comments_template(); ?>
    </div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
