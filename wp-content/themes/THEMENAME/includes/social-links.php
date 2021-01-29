<?php       
    $page_title = get_the_title();      
    $email = get_theme_mod( 'site_email');      
    $facebook_url = get_theme_mod( 'site_social_facebook');     
    $patreon_url = get_theme_mod( 'site_social_patreon');       
    $twitter_url = get_theme_mod( 'site_social_twitter');       
    $tumblr_url = get_theme_mod( 'site_social_tumblr');
?>

<ul class="navbar-nav social-links">    
    <?php if( $email != ""){ ?>         
        <li>
            <a href="mailto:<?php echo $email; ?>" title="email">
                <i class="icon fa fa-envelope"></i>
            </a>
        </li>   
    <?php } ?>  
    <?php if( $facebook_url != ""){ ?>      
        <li>
            <a href="<?php echo $facebook_url; ?>" title="facebook" target="_blank"  rel="noopener noreferrer">
                <i class="icon fab fa-facebook-f"></i>
            </a>
        </li>  
    <?php } ?>  
    <?php if( $patreon_url != ""){ ?>       
        <li>
            <a href="<?php echo $patreon_url; ?>" title="patreon" target="_blank"  rel="noopener noreferrer">
                <i class="icon  fab fa-patreon"></i>
            </a>
        </li>  
    <?php } ?>  
    <?php if( $twitter_url != ""){ ?>       
        <li>
            <a href="<?php echo $twitter_url; ?>" title="twitter" target="_blank"  rel="noopener noreferrer">
                <i class="icon fab fa-twitter"></i>
            </a>
        </li>   
    <?php } ?>  
    <?php if( $tumblr_url != ""){ ?>        
        <li>
            <a href="<?php echo $tumblr_url; ?>" title="tumblr" target="_blank"  rel="noopener noreferrer">
                <i class="icon fab fa-tumblr"></i>
            </a>
        </li>  
    <?php } ?>
</ul>