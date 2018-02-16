 <!--Footer-->
 <?php 
 $display_footer_widgets    = alchem_option('display_footer_widgets'); 
 $footer_columns            = alchem_option('footer_columns'); 
// $copyright_text            = alchem_option('copyright_text',''); 
 $tooltip_position          = alchem_option('footer_social_tooltip_position','top'); 
 $footer_special_effects    = alchem_option('footer_special_effects');
 $footer_class =  $footer_special_effects == 'footer_sticky'? 'fxd-footer':'';
 ?>
        <footer class="<?php echo $footer_class;?>">
        <?php if( $display_footer_widgets == 'yes' ):?>
            <div class="footer-widget-area">
                <div class="container alchem_display_footer_widgets">
                    <div class="row">
                    <?php 

					for( $i=1;$i<=$footer_columns; $i++ ){
					?>
                    <div class="col-md-<?php echo 12/$footer_columns; ?>">
                    <?php
							if(is_active_sidebar("footer_widget_".$i)){
	                           dynamic_sidebar("footer_widget_".$i);
                               }
							?>
                    </div>
                    
                    <?php }?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="footer-info-area">
                <div class="contact-info">
                        <h2>Contact Info</h2>
                    <ul>
                        <li>243 S WABASH AVE, CHICAGO, IL 60604, 7TH FLOOR</li>
                        <li>(312) 362-1309</li>
                        <li>idlab@depaul.edu</li>
                    </ul>
                </div>
                <div class="depaul-cdm">
                    <img src="wp-content/uploads/2017/09/depaul-logo-1.png"/>
                </div>
                <div class="container text-center alchem_footer_social_icon_1"> 
                 <?php echo alchem_get_social('footer','footer-sns', $tooltip_position);?>
                    <div class="clearfix"></div>
                    <?php 
					 wp_nav_menu(array('theme_location'=>'footer_menu','depth'=>1,'fallback_cb' =>false,'menu_class'=>'footer-links','link_before' => '', 'link_after' => '','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));
					?>

                    <div class="site-info" style="display:none;">
                    <?php printf(__('Powered by <a href="%s" target="_blank">WordPress</a>. Designed by <a href="%s" target="_blank">Magee Themes</a>.','alchem'),esc_url('http://wordpress.org/'),esc_url('http://www.mageewp.com/'));?>
                    </div>
                    
                </div>
                <div class="copyright">Copyright © 2017 iD-Lab. All Rights Reserved.</div>
            </div>          
        </footer>
    </div>  
    <?php wp_footer(); ?>
</body>
</html>