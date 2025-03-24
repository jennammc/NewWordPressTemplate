<?php get_header(); ?>

  <main role="main" class="post-page">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php $hero_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' ); ?>
        <section class="hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
          <div class="row">
            <div class="content-wrap">
              <div class="headline">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </section>

        <section class="page-content">
          <div class="row">

            <div class="author-date">
              <span class="author">Published by: <?php the_author(); ?> </span> - 
              <span class="date"><?php the_time('F j, Y'); ?></span>
            </div>

            <div class="post-body">
              <?php the_content(); ?>
            </div>

            
            <?php if( has_tag() ) { ?>
              <div class="tags">
                <?php the_tags( __( 'Tags: ', 'juno' ), ', '); // Separated by commas  ?>
              </div>
            <?php } ?>

          </div>
        </section>

        <section class="prev-next-buttons">
          <div class="row">
            <div class="prev-button">
              <?php previous_post_link(); ?> 
            </div>
            <div class="next-button">
              <?php next_post_link(); ?> 
            </div>
          </div>
        </section>

      </article>

    <?php endwhile; endif; ?>

  </main>

<?php get_footer(); ?>
