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


<header class="header-page text-center" style="background-image: url(<?php the_field('header_image') ?>)">

  <div class="header-blue-gradient"></div>
  <div class="header-gradient"></div>
  <h1 class="text-white evidence_h1" >Gen Z <br> Evidence</h1>


</header>

<section class=" ">
  <div class="top-paragraph mt-0 blue-text big-p mb-0" >
    <?php the_field('main_text'); ?>

  </div>
  <div class="right-now-media ">
    <p>Students seeking more evidence or wanting to learn more reasons Why To Believe can enter the Student Login Portal to view Y2B recommended materials from a vast library of free resources designed to help you grow in your faith.</p>
    <div class="text-center rmt-3 student-login-button">

    </div>
    <div class="text-center">
      <button class="y2-button" type="button" >
            <a href="<?php echo site_url('right-now-media-link') ?>"><p>Student Login Portal</p></a>
      </button>
    </div>

  </div>
  <!-- <div  class="hr-medium"></div> -->
  <div class="text-center sorting">


    <button id="video-sort-button" class="rmt-4"  type="button" name="button">Videos<i class="fas fa-chevron-down"></i></button>
    <button id="article-sort-button" class="ml-4" type="button" name="button">Articles<i class=" fas fa-chevron-down"></i></button>
    <button id="all-sort-button" class="ml-4"  type="button" name="button">Both<i class="fas fa-chevron-down"></i></button>


  </div>
</section>


<section id="tiled">

<div class="row">

    <?php
      $videoNum = 0;
      $args = array(
        'post_type' => 'post',
        'cat' => 5,
        'meta_query' => array(
          'relation' => 'OR',
          array(
              'key' => 'post_order',
              'compare' => 'EXISTS'
          ),
          array(
              'key' => 'post_order',
              'compare' => 'NOT EXISTS'
          )
        ),
        'orderby' => array(
            'meta_value_num' => 'ASC',
            'date' => 'DESC'
        )
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
    ?>

    <?php if (get_field('pdf_link')) :?>


    <div class="col-12 col-md-6 col-lg-4 col-xl-3 rmt-4 text-center article-tile">
        <div class="tile">
            <a href="<?php the_field('pdf_link'); ?>" target="_blank" class="link-cover"></a>
            <div class="article-bg-pic" style="background-image: url('<?php the_post_thumbnail_url() ?>');" ></div>
            <h6><?php the_title(); ?></h6>
            <h5 class="blue-text font-weight-bold">View PDF<i class="fas fa-chevron-right"></i></h5>
        </div>
    </div>

    <?php elseif (get_field('article_link')) :?>

    <div class="col-12 col-md-6 col-lg-4 col-xl-3 rmt-4 text-center article-tile">
      <div class="tile">
        <a href="<?php the_field('article_link'); ?>" target="_blank" class="link-cover"></a>
        <div class="article-bg-pic" style="background-image: url('<?php the_post_thumbnail_url() ?>');" ></div>
        <h6><?php the_title(); ?></h6>
        <h5 class="blue-text font-weight-bold">Read Article<i class="fas fa-chevron-right"></i></h5>
      </div>
    </div>

    <?php else: ?>

    <div class="col-12 col-md-6 col-lg-4 col-xl-3 rmt-4 text-center video-tile">

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

<div class="text-center rmt-5">
      <?php

         if( have_rows('pdf_upload') ):
             while( have_rows('pdf_upload') ) : the_row();
               ?>
              <button class="y2-button rmt-3" type="button" data-toggle="collapse" data-target="#collapseCoreValues" aria-expanded="false" aria-controls="collapseCoreValues">
                  <a href="<?= get_sub_field('pdf_file') ?>" target="_blank">
                      <p><?= get_sub_field('pdf_title') ?></p>
                  </a>
              </button>
              <?php
             endwhile;
         endif;

     ?>
    </div>


</section>



<?php

get_footer();
