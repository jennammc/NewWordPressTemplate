<?php 
    /* Template Name: Page: Login */ 
    get_header();

    $page_title = get_the_title(); 
?>

<main role="main" class="home">
   <div class="container">
        <div class="row">
            <div class="col">

                <div id="login-form-container">
                    <div class="header"><?php echo $page_title; ?></div>
                    <div class="form-content">
                        <?php  wp_login_form($login_form_args); ?>
                        <a class="login-forgot-password" href="/wp-login.php?action=lostpassword">forgot password</a>
                        <a class="login-forgot-password mr-3" href="/user-registration/">create an account</a>
                    </div>
                </div>
                
            </div>
       </div>
   </div>
</main>


<?php get_footer(); ?>
