<?php 
    /* Template Name: Page: Blog */ 
    get_header();
    $page_title = get_the_title();



    $args = array(
        'post_type'=> 'post',
        'orderby'    => 'date',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => 3 // this will retrive all the post that is published 
    );
    $last_three_posts_query = new WP_Query( $args );
    $last_three_posts = array();
    if($last_three_posts_query->have_posts()):
        while($last_three_posts_query->have_posts()): $last_three_posts_query->the_post();
                array_push($last_three_posts, get_the_ID());
        endwhile;
    endif;






    function get_posts_years_array() {
        global $wpdb;
        $result = array();
        $years = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT CONCAT(MONTHNAME(post_date), ' ', YEAR(post_date)), YEAR(post_date), MONTH(post_date)  FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post' GROUP BY CONCAT(MONTHNAME(post_date), ' ', YEAR(post_date))  ORDER BY YEAR(post_date) DESC, MONTH(post_date) DESC"
            ),
            ARRAY_N
        );
        if ( is_array( $years ) && count( $years ) > 0 ) {
            foreach ( $years as $year ) {
                $result[] = array("year" => $year[1], "month" => $year[2], "month_and_year" => $year[0]);  
            }
        }
        return $result;
    }



    function get_category_names($post_id){
        $categories = get_the_category($post_id);
        $category_names = array();

        if(is_array($categories) && count($categories) > 0){
            foreach($categories as $category){
                array_push($category_names, $category->name);
            }
        }
        return $category_names;
    }


    

    $post_months_and_years = get_posts_years_array();
    $post_categories = get_categories();
?>

<pre><?php //var_dump(); ?></pre>

<main role="main" class="interior template-basic">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $page_title; ?></h1>                
            </div>
       </div>
    </div>

    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <?php if(is_array($post_categories) && count($post_categories) > 0): ?>
                    <?php foreach($post_categories as $category): ?>
                        <a class="p-2 link-secondary" data-count="<?php echo $category->count; ?>" href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic"><?php echo get_the_title($last_three_posts[0]); ?></h1>
                <p class="lead my-3"><?php echo get_the_excerpt($last_three_posts[0]); ?></p>
                <p class="lead mb-0"><a href="<?php echo get_the_permalink($last_three_posts[0]); ?>" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo implode(" &bull; ", get_category_names($last_three_posts[1])); ?></strong>
                    <h3 class="mb-0"><?php echo get_the_title($last_three_posts[1]); ?></h3>
                    <div class="mb-1 text-muted"><?php echo get_the_date('M d', $last_three_posts[1]); ?></div>
                    <p class="card-text mb-auto"><?php echo get_the_excerpt($last_three_posts[1]); ?></p>
                    <a href="<?php echo get_the_permalink($last_three_posts[1]); ?>" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"><?php echo implode(" &bull; ", get_category_names($last_three_posts[2])); ?></strong>
                    <h3 class="mb-0"><?php echo get_the_title($last_three_posts[2]); ?></h3>
                    <div class="mb-1 text-muted fw-lighter"><?php echo get_the_date('M d', $last_three_posts[2]); ?></div>
                    <p class="mb-auto"><?php echo get_the_excerpt($last_three_posts[2]); ?></p>
                    <a href="<?php echo get_the_permalink($last_three_posts[2]); ?>" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    More Articles
                </h3>


                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <article class="blog-post mb-5">
                            <h2 class="blog-post-title"><?php the_title(); ?></h2>
                            <p class="blog-post-meta"><?php echo get_the_date('l F j, Y'); ?></p>

                            <?php echo get_the_excerpt(); ?>

                            <div class="mt-3"><a class="btn btn-primary" href="<?php echo get_the_permalink(); ?>">Read More</a></div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>


                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0"> 
                            <?php if(is_array($post_months_and_years) && count($post_months_and_years) > 0): ?>
                                <?php foreach($post_months_and_years as $month_and_year): ?>
                                    <li><a href="/<?php echo $month_and_year["year"]; ?>/<?php echo $month_and_year["month"]; ?>"><?php echo $month_and_year["month_and_year"]; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                            <ol class="list-unstyled">
                                <li><a href="#">GitHub</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
</main>


<?php get_footer(); ?>
