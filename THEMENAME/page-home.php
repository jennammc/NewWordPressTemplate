<?php 
    /* Template Name: Page: Homepage */ 
    get_header();
?>

<main role="main" class="home page-home">
   <div class="container">
        <div class="row">
            <div class="col-12">

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    
                        <?php echo the_content(); ?>

                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>
       </div>
   </div>
</main>


<?php get_footer(); ?>
