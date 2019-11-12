<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ytobelieve
 */

get_header();
?>


<header class="header-process text-center" style="background-image: url('/wp-content/uploads/2019/11/Michael-with-students.jpg')">
  <div class="header-gradient"></div>
  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >Evidence</h1>

</header>



<section id="">

  <?php
      $args = array(
          'post_type' => 'post'
      );

      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
          ?>
          <h2><?php the_title(); ?></h2>
        <!-- <iframe width="100%" height="" src="https://www.youtube.com/embed/<?php the_field('youtube_video_id'); ?>" frameborder="0" controls=0 allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->


      <div class="" style="position: relative;">
        <div class="mobile-no-show" style="position: absolute; top: 0; left: 0; width:100%; height:100%;z-index:2" data-toggle="modal" data-target="#myModal"></div>
          <iframe style="" src="https://www.youtube.com/embed/<?php the_field('youtube_video_id') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>




      <div class="modal fade "  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h5 class="modal-title"></h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <iframe id="youtubeVid" style="height: 85vh; width: 100%;" src="https://www.youtube.com/embed/<?php the_field('youtube_video_id') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <?php
    }
  }
  ?>
  <?php wp_reset_postdata() ?>
  <?php wp_reset_query() ?>
</section>



<?php

get_footer();
