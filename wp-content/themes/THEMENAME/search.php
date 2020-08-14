<?php get_header(); ?>

  <main role="main" class="search">

    <section class="hero">
      <div class="row">
        <div class="content-wrap">
          <div class="headline">
            <h1>Search Results</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="page-content">
      <div class="row">
        <h2><?php echo sprintf( __( '%s Search Results for ', 'juno' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
        <div class="search-results-wrap">
          <?php get_template_part('loop'); ?>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
