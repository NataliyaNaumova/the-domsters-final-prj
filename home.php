<?php get_header(); ?>


  <div id="content">
    <div class="row">
      <div class="col-md-9">
        <div class="page-header-blog">
           <!-- gives us the name of the page itself -->
            <h1><?php wp_title(''); ?></h1>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- date() only shows date for post on that day, time() function better here -->
            <!-- add name in users section of Dashboard to offer better name display -->
            <p>By <?php the_author(); ?>
               on <?php echo the_time('l, F jS, Y'); ?>
               in <?php the_category( ', ' ); ?>
               <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>

            <?php the_excerpt(); ?>
          </article>

        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->

        <?php endif; ?>
      </div>

      <?php get_sidebar( 'blog' ); ?>

    </div><!-- END .row -->
</div>


<?php get_footer(); ?>
