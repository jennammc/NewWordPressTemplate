        <?php        
            $site_name = get_bloginfo();        
            $site_phone_number = get_theme_mod('site_phone_number');        
            $site_address_line_1 = get_theme_mod('site_address_line_1');        
            $site_address_line_2 = get_theme_mod('site_address_line_2');        
            $site_email = get_theme_mod('site_email');        
            $footer_logo = get_theme_mod('site_footer_logo');        
            $google_analytics_code = get_theme_mod('site_google_analytics_code');
        ?>

        <footer id="footer" role="contentinfo">        
            <div class="container">            
                <div class="row">               
                    <div class="col-12 col-md-4">                  
                        <div class="contact-section name">
                            <p><?php echo $site_name; ?></p>
                        </div> 
                        <div class="contact-section address">
                            <p><?php echo $site_address_line_1; ?></p>
                            <p><?php echo $site_address_line_2; ?></p>
                        </div>  
                        <div class="contact-section phone">
                            <p><?php echo $site_phone_number; ?></p>
                        </div>                
                    </div>               
                    <div class="col-12 col-md-8">                  
                        <nav class="footer-nav">                      
                            <?php wp_nav_menu(                           
                                array(                              
                                    'theme_location' => 'footer_nav',                               
                                    'container' => '',                              
                                    'after' => '<span class="separator">/</span>'                          
                                )                       
                            );?>                      
                            <?php include("includes/social-links.php"); ?>                  
                        </nav>               
                    </div>            
                </div><!-- .row -->        
            </div>    
        </footer>

        <?php wp_footer(); ?>
        <?php /* :::::::::: analytics :::::::::: */ ?>    
        <?php echo $google_analytics_code; ?>
    </body>
</html>






