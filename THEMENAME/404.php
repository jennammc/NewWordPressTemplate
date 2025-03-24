<?php get_header(); ?>
<?php   
    $home_url = home_url();    
    $error_image = get_theme_mod('site_404_image');    
    $error_copy_main = get_theme_mod('site_404_copy_main');    
    $error_copy_secondary = get_theme_mod('site_404_copy_secondary');    
    $error_home_btn_copy = get_theme_mod('site_404_home_btn_copy');    
    $error_home_btn_copy = $error_home_btn_copy != "" ? $error_home_btn_copy : "Return Home";
?>

<main role="main" class="interior interior-404">        
    <div class="main-content container">            
        <div class="row">               
            <section class="col">                   
                <div class="title">                         
                    <a href="<?php echo home_url(); ?>">                            
                        <?php if($error_image != ""){ ?>                                
                            <img src="<?php echo $error_image; ?>" alt="404">                           
                        <?php } else {  ?>                              
                            <h1>404</h1>                            
                        <?php } ?>                      
                    </a>                    
                </div>                      
                <div class="copy">                          
                    <p><?php echo $error_copy_main; ?></p>                          
                    <p><?php echo $error_copy_secondary; ?></p>                     
                </div>                      
                <div class="links">                         
                    <a class="button secondary" href="<?php echo home_url(); ?>"><?php echo $error_home_btn_copy; ?></a>                    
                </div>              
            </section>              
        </div>      
    </div>  
</main>

<?php get_footer(); ?>