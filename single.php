<?php get_header(); ?>

<div class="blogmain">
  <div class="container">
    <div class="content3">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

      </div><!-- #post-## -->

        <div class="sideBar2">
          <?php get_sidebar(); ?>
        </div>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
        <?php comments_template( '', true ); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>