<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
    <div id="widgets" class="home-widgets">
        <div class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('home-widget-1')) : ?>
            <div class="widget-wrapper">
            
				<div class="widget-title-home"><h3>Do you want a showreel?</h3></div>
				<div class="textwidget">Do you commission music? <a href="/contact">Get in touch</a> and I'll send you a showreel.</div>
                <!--<div class="widget-title-home"><h3><?php _e('Home Widget 1', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area six called Home Widget 1. Title is also manageable from widgets as well.','responsive'); ?></div>-->
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-300 -->

        <div class="grid col-300">
        <?php responsive_widgets(); // responsive above widgets hook ?>
            
			<?php if (!dynamic_sidebar('home-widget-2')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3>News</h3></div>
                <div class="textwidget">I've just finished working on a music for a short film, to be submitted to festivals in 2013. <a href="/music">Listen to the electronica set</a> or <a href="/video">watch some video clips</a>.</div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-300 -->

        <div class="grid col-300 fit">
        <?php responsive_widgets(); // above widgets hook ?>
            
			<?php if (!dynamic_sidebar('home-widget-3')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3>Contact</h3></div>
                <div class="textwidget">
					Email: <a href="mailto:info@mattdaleymusic.com">info@mattdaleymusic.com</a><br/>
					Tel: +44 (0)7825 056866
				</div>
        
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-300 fit -->
    </div><!-- end of #widgets -->