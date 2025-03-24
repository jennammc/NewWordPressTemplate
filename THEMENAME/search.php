<?php get_header(); ?>
<?php
    $search_query = $_GET["s"] ;
    $items_per_page = get_theme_mod('site_search_items_per_page');
    $items_per_page = $items_per_page ? (int)$items_per_page : 20;

    if( is_null($search_query) == false && $search_query != "" ):
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            's' =>$search_query,
            'posts_per_page' => $items_per_page,
            'post_status' => 'publish',
            'paged' => $paged
        );
        // The Query
        $query = new WP_Query( $args );


        //query count
        $total_post_count = $query->found_posts;
        $query_label = $total_post_count == 1 ? "Result" : "Results";
    endif;
?>

    <main role="main" class="search interior">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Search Results</h1>

                    <?php if( is_null($search_query) == false  && $search_query != ""): ?>
                        <h2><?php echo sprintf(  '%s Search %s for %s', $total_post_count, $query_label, $search_query ); ?></h2>
                        <div class="search-results-wrap">
                            <div class="search-items"> 
                                <?php if ( $query->have_posts() ) { ?>   
                                    <?php while ( $query->have_posts() ) { ?>
                                        <?php $query->the_post(); ?>
                                        <?php $post_id = get_the_ID(); ?>

                                        <div class="row search-item py-4">
                                            <div class="col-12 col-md-4">
                                                <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' )[0]; ?>"> 
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <h4 class="text-left"><?php the_title(); ?></h4>
                                                <div class="p2 excerpt">
                                                    <?php the_excerpt() ?>
                                                </div>
                                                <div class="p2 readmore">
                                                    <a href="<?php echo get_permalink(); ?>">Learn&nbsp;More &gt;</a>
                                                </div>
                                            </div>
                                        </div>
                                                     
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            
                            <div class="pagination">
                                <?php 
                                    $total_pages = $query->max_num_pages; 
                                    if ($total_pages > 1){

                                        $current_page = max(1, get_query_var('paged'));

                                        echo paginate_links(array(
                                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                            'current'      => $current_page,
                                            'total'        => $total_pages,
                                            'format'       => '?paged=%#%',
                                            'show_all'     => false,
                                            'type'         => 'plain',
                                            'end_size'     => 2,
                                            'mid_size'     => 1,
                                            'prev_next'    => true,
                                            'prev_text'    => sprintf( '<i></i> %1$s', __( '<<', 'text-domain' ) ),
                                            'next_text'    => sprintf( '%1$s <i></i>', __( '>>', 'text-domain' ) ),
                                            'add_args'     => false,
                                            'add_fragment' => '',
                                        ));
                                    }
                                ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div>No search results were found.</div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

  </main>

<?php get_footer(); ?>


