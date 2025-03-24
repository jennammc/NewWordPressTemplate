<?php 
    /* Template Name: Template: Basic */ 
    get_header();
    $page_title = get_the_title();
?>

<main role="main" class="interior template-basic">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $page_title; ?></h1>

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
