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


<header class="header-page text-center" style="background-image: url('/wp-content/uploads/2019/12/MB-MG-PR2-2.jpeg')">
  <div class="header-blue-gradient"></div>
  <div class="header-gradient"></div>
  <h1 data-aos="fade-in" data-aos-duration="2000" data-aos-once="true"  class="text-white " >Conversations of Consequence</h1>


</header>

<div data-aos="fade-in" data-aos-duration="2000" data-aos-once="true" class="partner-text">
  <?php the_field('main_text'); ?>
</div>


<div class="wrapper">
  <div class=" video-container">
    <?php the_field('featured_video') ?>
  </div>
</div>


<style>

.video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; }

.video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

.wrapper {
  max-width: 900px;
  margin: 0 auto;
}

</div>

<section id="tiled">

<div class="row">

    <?php
      $videoNum = 0;
      $args = array(
          'post_type' => 'post',
          'cat' => 4,
          'orderby' => 'title',
          'order' => 'ASC',
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
      ?>



      <?php if (get_field('article_link')) :?>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3  rmt-4 text-center article-tile">
          <div class="tile">
            <a href="<?php the_field('article_link'); ?>" target="_blank" class="link-cover"></a>
            <div class="article-bg-pic" style="background-image: url('<?php the_post_thumbnail_url() ?>');" ></div>
            <h6><?php the_title(); ?></h6>
            <h5 class="blue-text font-weight-bold">Read Article<i class="fas fa-chevron-right"></i></h5>
          </div>
        </div>


      <?php else: ?>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3   rmt-4 text-center video-tile">

          <div class="tile" >
            <div class="mobile-no-show thumbnail-container" style="" data-toggle="modal" data-target="#myModal<?=$videoNum?>"></div>

            <?php the_field('embed'); ?>

            <h6><?php the_title(); ?></h6>

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

                  <?php the_field('embed'); ?>

              </div>
            </div>
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
