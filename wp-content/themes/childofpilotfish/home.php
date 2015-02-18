<?php
/**
 * Front Page with Featured Content
 *
 *
 * @file           home.php
 * @package        Pilot Fish
 * @filesource     wp-content/themes/pilot-fish/home.php
 * @since          Pilot Fish 0.1
 */

get_header(); ?>
    
	<div id="featured" class="hidden-phone">
	
		<h2 class="featured-subtitle"><?php echo __('A Minimal, Responsive Portfolio Theme','pilotfish'); ?></h2>
            	<p><?php echo __('I can edit this as child theme home.php in the Edit Panel. Happy Blogging! ','pilotfish'); ?></p>
				
	<div id="banner-text" class="span12">     
		<h1 class="featured-title"><?php echo __('African Languages','pilotfish'); ?></h1>
	</div>
        </div><!-- end of #featured -->
             
	<div class="center"><h2><?php _e('AFRICAN TRADITIONAL LANGUAGES','pilotfish')?></h2></div>
	<hr>
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
