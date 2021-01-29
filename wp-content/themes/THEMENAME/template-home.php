<?php 
    /* Template Name: Homepage */ 
    get_header(); 
?>

<?php
               
?>


<main role="main" class="home">
   <div class="container">
        <div class="row">
            <div class="col">

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
