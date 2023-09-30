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


<header class="header-page text-center" style="background-image: url('/wp-content/uploads/2019/11/Tyler-teaching-2.jpg')">
  <div class="header-blue-gradient"></div>

  <div class="header-gradient"></div>

  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >Why Y2B</h1>

</header>


<section class="why-how">
  <p class="mt-0 blue-text big-p " data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
    When students arrive on a college campus, they are immediately bombarded with influences contrary to Christianity and the results have been devastating: <br> <i>75% of Christian youth abandon their faith after High School.</i>
  </p>

  <div class="row">
    <div class="col-12 col-md-5 "  data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
      <img   src="/wp-content/uploads/2019/11/Michael-at-CM-Summit-2017.jpg" alt="">
    </div>
    <div class="col-12 col-md-7 md7-text-padding">

     <p data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="mobile-margin">
       <strong class="blue-text ">Y2Believe (Y2B)</strong> is mounting a full-scale effort to reverse these alarming trends by addressing issues as they arise in High School. Y2B engages students on public high school and middle school campuses with compelling evidence from history, philosophy, and science that support the truth of Christianity while giving them an opportunity to respond to the Gospel.
     </p>
     <div class="hr-small " data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"> </div>

     <p class="p-margin" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
       <strong class="blue-text">Y2B</strong> partners with existing Christian ministries on public school campuses, bringing lively discussions on topics of significant interest to students. These core discussion topics (the Apologetic Fundamentals) are address with students over 4 weeks :
     </p>

      <ul class="p-margin"  class="rmt-1 rmb-3" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
        <li class="">Who are you? What is Truth? Are there Moral Absolutes?</li>
        <li class="">What Evidence is there that God Exists?</li>
        <li class="">Is the Bible Trustworthy?</li>
        <li class="">Why is there So Much Evil in the World?</li>
      </ul>

      <div class="hr-small " data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"> </div>


      <p class="p-margin"  data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
        <strong class="blue-text">Y2B</strong> instills students with clear, rational, open-minded thinking skills informed by apologetic evidence. Teaching students to think critically allows them to provide engaging responses to challenges to their faith based on evidence. Students engage their peers to evaluate why they believe what they believe and to support their truth claims with evidence.
      </p>

       <div class="hr-small " data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"> </div>

      <p class="p-margin"  data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
        <strong class="blue-text">Y2B</strong> empowers students with life-changing irrefutable evidence for biblical truths while sharpening student’s skills for winsome engagement. Y2B develops students to become the most magnetic and prominent influencers on campus leading their peers to live the best life as God intended and then going on to live out the Great Commission all their lives.
      </p>
    </div>
  </div>
</section>

<div class="wrapper">
    <div class=" video-container">
        <?php the_field('featured_video') ?>
    </div>
</div>

<section id="tiled">
  <div class="row">

      <?php
        $videoNum = 0;
        $args = array(
            'post_type' => 'post',
            'category_name' => 'purpose',
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

<style>

    .video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; }

    .video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

    .wrapper {
        max-width: 900px;
        margin: 0 auto calc(35px + 3vw);
    }

</style>

<?php

get_footer();
