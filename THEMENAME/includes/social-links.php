<?php       
    $page_title = get_the_title();      
    $email = get_theme_mod( 'site_email');      
    $facebook_url = get_theme_mod( 'site_social_facebook');          
    $twitter_url = get_theme_mod( 'site_social_twitter');       
    $linkedin_url = get_theme_mod( 'site_social_linkedin');
    
    $instagram_url = get_theme_mod( 'site_social_instagram');
    $youtube_url = get_theme_mod( 'site_social_youtube');
?>

<?php if(is_valid_string($email) || is_valid_string($facebook_url) || is_valid_string($twitter_url) || is_valid_string($linkedin_url) || is_valid_string($instagram_url) || is_valid_string($youtube_url)): ?>
    <ul class="navbar-nav social-links">    
        <?php if(is_valid_string($email)){ ?>         
            <li>
                <a href="mailto:<?php echo $email; ?>" title="email">
                    <i class="icon icon-envelope"></i>
                </a>
            </li>   
        <?php } ?>  
        <?php if(is_valid_string($facebook_url)){ ?>      
            <li>
                <a href="<?php echo $facebook_url; ?>" title="facebook" target="_blank"  rel="noopener noreferrer">
                    <i class="icon icon-facebook"></i>
                </a>
            </li>  
        <?php } ?>  
        <?php if(is_valid_string($twitter_url)){ ?>       
            <li>
                <a href="<?php echo $twitter_url; ?>" title="twitter" target="_blank"  rel="noopener noreferrer">
                    <i class="icon icon-twitter"></i>
                </a>
            </li>   
        <?php } ?>  
        <?php if(is_valid_string($linkedin_url)){ ?>        
            <li>
                <a href="<?php echo $social_linkedin; ?>" title="linked in" target="_blank"  rel="noopener noreferrer">
                    <i class="icon icon-linkedin"></i>
                </a>
            </li>  
        <?php } ?>
        <?php if(is_valid_string($instagram_url)){ ?>        
            <li>
                <a href="<?php echo $instagram_url; ?>" title="linked in" target="_blank"  rel="noopener noreferrer">
                    <i class="icon icon-instagram"></i>
                </a>
            </li>  
        <?php } ?>
        <?php if(is_valid_string($youtube_url)){ ?>        
            <li>
                <a href="<?php echo $youtube_url; ?>" title="linked in" target="_blank"  rel="noopener noreferrer">
                    <i class="icon icon-youtube"></i>
                </a>
            </li>  
        <?php } ?>
    </ul>
<?php endif; ?>