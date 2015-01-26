<?php
/**
 * Home Widgets Template
 *
 * @file           sidebar-home.php
 * @package        Pilot Fish
 * @filesource     wp-content/themes/pilot-fish/sidebar-home.php
 * @since          Pilot Fish 0.1
 */
?>
    <div id="widgets" class="sidebar-home">
        <div class="row span4">
        <?php pilotfish_widgets(); // before widgets hook ?> 
            
            <?php if (!dynamic_sidebar('sidebar-home-1')) : ?>
                
                <section id="sidebar-home-1" class="widgets-home">
                <div class="widget-inner">
                <img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/africanart.jpg" alt="">
                <h3 class="center"><?php _e('Interviewer one', 'pilotfish'); ?></h3>
				<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
  <source src="http://www.shockwave-sound.com/sound-effects/monster-sounds/monster2.wav">
				</audio>
				
                <div class="textwidget"><?php _e('Replace the text here in the sidebar-home.php, or add widgets to Featured One area.','pilotfish'); ?></div>
                </div>
                </section>
                
	<?php endif; //end of sidebar-home-1 ?>

        <?php pilotfish_widgets_end(); // after widgets hook ?>
        </div><!-- end of .span4 -->

        <div class="row span4">
        <?php pilotfish_widgets(); // before widgets hook ?>
        
	    <?php if (!dynamic_sidebar('sidebar-home-2')) : ?>
                
                <section id="sidebar-home-2" class="widgets-home">
                <div class="widget-inner">
                <img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/femaleafricans.jpg" alt="">
                <h3 class="center"><?php _e('Interviewer two', 'pilotfish'); ?></h3>
				<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
  <source src="http://www.shockwave-sound.com/sound-effects/monster-sounds/monster2.wav">
				</audio>
                <div class="textwidget"><?php _e('Replace the text here in the sidebar-home.php, or add widgets to Featured Two area.','pilotfish'); ?></div>
                </div>
                </section>
                            
	<?php endif; //end of sidebar-home-2 ?>
        <?php pilotfish_widgets_end(); // after widgets hook ?>
        </div><!-- end of .span4 -->

        <div class="row span4 last">
        <?php pilotfish_widgets(); // before widgets hook ?>
            <?php if (!dynamic_sidebar('sidebar-home-3')) : ?>
                
                <section id="sidebar-home-3" class="widgets-home">
                <div class="widget-inner">
                <img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/Afriart.jpg" alt="">
                <h3 class="center"><?php _e('interviewer three', 'pilotfish'); ?></h3>
				<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
  <source src="http://www.shockwave-sound.com/sound-effects/monster-sounds/monster2.wav">
				</audio>
                <div class="textwidget"><?php _e('Replace the text here in the sidebar-home.php, or add widgets to Featured Three area.','pilotfish'); ?></div>
                </div>
                </section>
                
	<?php endif; //end of sidebar-home-3 ?>
	
        <?php pilotfish_widgets_end(); // after widgets hook ?>
        </div><!-- end of .span4 last -->     
    </div><!-- end of #widgets -->
