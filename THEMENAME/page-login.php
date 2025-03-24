<?php 
    /* Template Name: Page: Login */ 
    get_header();

    $page_title = get_the_title();
    
    $require_user_is_logged_in = get_theme_mod('site_require_user_is_logged_in');
    if($require_user_is_logged_in == true){
        $site_login_redirect = get_theme_mod('site_login_redirect');
        $login_form_args = array(
            'redirect' => $site_login_redirect
        );
    }
?>

<main role="main" class="interior page-login">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="login-form-container">
                    <h1><?php echo $page_title; ?></h1>
                    <div class="form-content">
                        <?php if($require_user_is_logged_in == true){ ?>
                            <?php  wp_login_form($login_form_args); ?>
                            <a class="login-forgot-password" href="/wp-login.php?action=lostpassword">forgot password</a>
                            <a class="login-forgot-password mr-3" href="/user-registration/">create an account</a>
                        <?php } ?>
                    </div>
                </div>
                
            </div>
       </div>
   </div>
</main>


<?php get_footer(); ?>
