<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div class="clear"></div>

</div>
	</div>
    	</div>

</div>

<div id="footer" role="contentinfo">
	<div class="footer_content">
    
    	<div class="footer_logos">
        	<a href="http://indeziner.com" class="indeziner" target="_blank"></a>
            <a href="http://wordpress.org" class="wordpress" target="_blank"></a>
            <a href="http://www.smashingmagazine.com/" class="smashingmagazine" target="_blank"></a>        
        </div>	       

       	<?php wp_page_menu('show_home=1&menu_class=footer_menu'); ?>
 
        <div class="footer_share_box">
            <img src="<?php bloginfo('template_url'); ?>/images/share.gif" alt="" title="" border="0" />
            <a href="<?php echo get_option('home'); ?>/feed/rss/"><img src="<?php bloginfo('template_url'); ?>/images/rss.gif" alt="" title="" border="0" /></a>
            <a href="http://digg.com/submit?phase=2&url=<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/digg.gif" alt="" title="" border="0" /></a>
            <a href="http://www.facebook.com/sharer.php?u=<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.gif" alt="" title="" border="0" /></a>
            <a href="http://reddit.com/submit?url=<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/reddit.gif" alt="" title="" border="0" /></a>
            <a href="http://twitthis.com/twit?url=<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.gif" alt="" title="" border="0" /></a>
            <a href="http://www.stumbleupon.com/submit?url=<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/stumble.gif" alt="" title="" border="0" /></a>        
        </div>
        
        <div class="footer_copyright">
        &copy; 2009 Yoursitename.com - All Rights Reserved - Theme by <a href="http://indeziner.com" target="_blank">INDEZINER</a>
        </div>
        
        

        
	</div>
</div>

		
</body>
</html>
