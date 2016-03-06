<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content  contactContent">
      <div class="address">
      <?php // Start the loop ?>

        <form>
          <h2><?php the_title(); ?></h2>
          <input type="text" placeholder="name">
          <input type="email" placeholder="email">
          <textarea name="id=" placeholder="message"></textarea>
          <input type="submit"  value="Send">
        </form>
        
        <div class="contactAddress">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>

          <?php endwhile; // end the loop?>
        </div>
      </div>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>