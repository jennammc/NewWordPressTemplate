<?php 
    /* Template Name: Page: Blog */ 
    get_header();
    $page_title = get_the_title();

    $args = array(
        'post_type'=> 'post',
        'orderby'    => 'date',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published 
    );
    $query = new WP_Query( $args );
?>

<main role="main" class="interior template-basic">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $page_title; ?></h1>                
            </div>
       </div>
    </div>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">World</a>
            <a class="p-2 link-secondary" href="#">U.S.</a>
            <a class="p-2 link-secondary" href="#">Technology</a>
            <a class="p-2 link-secondary" href="#">Design</a>
            <a class="p-2 link-secondary" href="#">Culture</a>
            <a class="p-2 link-secondary" href="#">Business</a>
            <a class="p-2 link-secondary" href="#">Politics</a>
            <a class="p-2 link-secondary" href="#">Opinion</a>
            <a class="p-2 link-secondary" href="#">Science</a>
            <a class="p-2 link-secondary" href="#">Health</a>
            <a class="p-2 link-secondary" href="#">Style</a>
            <a class="p-2 link-secondary" href="#">Travel</a>
        </nav>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
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
                    From the Firehose
                </h3>


                <?php if($query->have_posts()): ?>
                    <?php while($query->have_posts()): $query->the_post(); ?>
                        <article class="blog-post">
                            <h2 class="blog-post-title"><?php the_title(); ?></h2>
                            <p class="blog-post-meta"><?php echo get_the_date(); ?></p>

                            <?php echo get_the_excerpt(); ?>
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
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
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
