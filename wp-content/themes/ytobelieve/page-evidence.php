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


<header class="header-page text-center" style="background-image: url('/wp-content/uploads/2019/12/Michael-with-students.jpg')">
  <div class="header-blue-gradient"></div>
  <div class="header-gradient"></div>
  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >Evidence</h1>

</header>

<section class=" ">
  <div class="top-paragraph mt-0 blue-text big-p mb-0" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
    <?php the_field('main_text'); ?>
  </div>
  <div data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="hr-medium"></div>
</section>


<section id="tiled">

<div class="row">

    <?php
      $videoNum = 0;
      $args = array(
          'post_type' => 'post'
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
    ?>




    <?php if (get_field('youtube_video_id')) : $videoNum++;?>

    <div class="col-12 col-md-6 col-lg-4 col-xl-3 rmt-4">


      <div class="tile" style="position: relative; width: 100%;">
        <div class="mobile-no-show" style="position: absolute; top: 0; left: 0; width:100%; height:100%;z-index:2" data-toggle="modal" data-target="#myModal<?=$videoNum?>"></div>
        <iframe style="" src="https://www.youtube.com/embed/<?php the_field('youtube_video_id') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h6><?php the_title(); ?></h6>
        <h5 class="blue-text font-weight-bold">Watch Video<i class="fas fa-chevron-right"></i></h5>

      </div>


      <div class="modal fade "  id="myModal<?=$videoNum?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    </div>

    <?php endif; ?>



    <?php if (get_field('article_link')) :?>

    <div class="col-12 col-md-6 col-lg-4 col-xl-3 rmt-4">


      <div class="tile" style="position: relative; width: 100%; height:100%">
        <a href="<?php the_field('article_link'); ?>" target="_blank" class="mobile-no-show" style="position: absolute; top: 0; left: 0; width:100%; height:100%;z-index:2" ></a>
        <div class="article-bg-pic" style="background-image: url('<?php the_post_thumbnail_url() ?>');" ></div>
        <h6><?php the_title(); ?></h6>
        <h5 class="blue-text font-weight-bold">Read Article<i class="fas fa-chevron-right"></i></h5>

      </div>





    </div>

    <?php endif; ?>


      <?php
    }
  }
  ?>
  <?php wp_reset_postdata() ?>
  <?php wp_reset_query() ?>

</div>

</section>



<?php

get_footer();
