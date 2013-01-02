<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
 *
 *
 * @file           sidebar-left.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-left.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
        <div id="widgets" class="grid-right col-300 rtl-fit">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('left-sidebar')) : ?>
            <div class="widget-wrapper">
            
                <!--<div class="widget-title">-->
					<!--<php _e('In Archive', 'responsive'); >-->
					
				<!--</div>-->
				<div class="textwidget">
					Please contact me by email or by phone. If you wish to obtain a showreel please say so and I will provide details for downloading it.
					<p>Tel: +44 (0)7825 056866<br/>
					Email: <a href="mailto:info@mattdaleymusic.com">info@mattdaleymusic.com</a><br/>
				</div>
					<!--<ul>
						<php wp_get_archives( array( 'type' => 'monthly' ) ); >
					</ul>-->

            </div><!-- end of .widget-wrapper -->
            <?php endif; //end of right-left ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->