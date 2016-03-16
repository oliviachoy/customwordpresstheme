<?php get_header();  ?>

<div class="hero">
  <div class="wrapper">
    <div class="whiteSquare">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <div class="logo">
         <h1><?php bloginfo( 'name' ); ?></h1>
         <h2><?php bloginfo('description'); ?></h2>
      </div>
    </a>
    </div>
    <div class="heroImage" style="background: url('<?php the_post_thumbnail_url('full') ?>') no-repeat; background-size: cover;"></div>
  </div>
</div>


  <div class="container">

    <div class="content" id="about">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <!-- aslong as there is posts to show, show posts -->
        <h2><?php 
          $title = get_the_title();
          echo $title; ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->



  <!-- featured image banner  -->
  <section class="gallery">
    <ul>
      <li><img src="<?php bloginfo('template_directory')?>/images/fashion1.jpg" alt=""></li>
      <li><img src="<?php bloginfo('template_directory')?>/images/fashion4.png" alt=""></li>
      <li><img src="<?php bloginfo('template_directory')?>/images/fashion2.jpg" alt=""></li>
      <li><img src="<?php bloginfo('template_directory')?>/images/fashion3.jpg" alt=""></li>
       <li><img src="<?php bloginfo('template_directory')?>/images/fashion5.jpg" alt=""></li>
    </ul>
  </section>

  <!-- featured blog ...static at the moment to be changed -->
  <section class="featuredBlog">
    <div class="blogImage"><img src="<?php bloginfo('template_directory')?>/images/blog1.jpeg" alt=""></div>
    <div class="blogInfo">
      <div class="blogDescription clearfix">
        <h3>Blog Post One</h3>
        <p> Posted On <span>January 31, 2016 by Olivia Choy</span></p>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur fugit porro corporis quos quo! Repellat tempore nemo a ea eligendi nostrum iste esse, officia et, labore doloribus officiis eveniet iure? Lorem ipsum dolor sit amet, consectetur adipisicing elit. A perspiciatis nesciunt. </p>
        <a href="blog">Read More</a>
      </div>
    </div>
  </section>

  <section class="infoSection">
    <div class="moreInfo">
      <h4>More Information</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas repellendus, quam, dolore reprehenderit, odit voluptatibus. </p>
      <button><a href="#">More Info</a></button>
    </div>
    <div class="moreInfo">
      <h4>More Information</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas repellendus, quam, dolore reprehenderit, odit voluptatibus.</p>
      <button><a href="#">More Info</a></button>
    </div>
    <div class="moreInfo">
      <h4>More Information</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas repellendus, quam, dolore reprehenderit, odit voluptatibus. </p>
      <button><a href="#blog">More Info</a></button>
    </div>
  </section>

  <section class="largeImage clearfix">
   <div class="overlay"></div>
    <div class="emailbox">
      <div class="emailform">
       <p>Subscribe for more information</p>
      <input type="email" placeholder="email address">
       </div>
    </div>
      <div class="submitButton">
        <input type="submit" class="submit">
      </div>
  </section>


  </div> <!-- /.container -->

<?php get_footer(); ?>