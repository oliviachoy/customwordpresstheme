<?php get_header();  ?>

<div class="hero">
  <div class="wrapper">
    <div class="whiteSquare">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <div class="logo">
         <h1><?php bloginfo( 'name' ); ?></h1>
      </div>
    </a>
    <h2><?php bloginfo('description'); ?></h2>
    </div>
    <div class="heroImage"></div>
  </div>
</div>

<div class="main">
  <div class="container">

    <div class="content">
    <img src=" <?php bloginfo('template_directory') ?>/images/hero.jpg" alt="">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <!-- aslong as there is posts to show, show posts -->
        <h2><?php 
          $title = get_the_title();
          echo $title; ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>