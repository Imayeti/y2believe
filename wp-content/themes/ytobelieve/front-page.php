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

<header class="header-home text-center" style="background-image: url('/wp-content/uploads/2021/03/MB-MG-PR3-2.jpg')">

  <div class="header-blue-gradient"></div>
  <div class="header-home-gradient"></div>

  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white text" ><?php the_field('header_text_1'); ?> <br> <?php the_field('header_text_2'); ?> </h1>

</header>


<section id="arrows" class="row">
    <div
        class="col-12 col-md-5 flip-words vision"
        data-aos-once="true"
        data-aos-delay="1000"
        data-aos="fade-in"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="500">
          <h5 class="pb-2 pb-md-4">Vision</h5>

          <p><?php the_field('vision'); ?></p>
   </div>


    <div class="col-12 col-md-2 logo-cont-mid">
        <div>
            <img class="float-right mx-auto d-block "
                 data-aos="flip-up"
                 data-aos-duration="1000"
                 data-aos-easing="ease-in-out"
                 src="/wp-content/uploads/2019/11/Y2BgreenBadge1.png">
        </div>
    </div>

    <div
        class="col-12 col-md-5 flip-words mission"
        data-aos-once="true"
        data-aos-delay="1300"
        data-aos="fade-in"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="500">
        <h5 class="pb-2 pb-md-4">Mission</h5>

        <p><?php the_field('mission'); ?></p>
    </div>
</section>

<section class=" testimonial-pic text-white" style="background-image: url('/wp-content/uploads/2021/03/Prayer-tent-openingV5.jpg')">
  <div class="red-bg-gradient"></div>

  <?php echo do_shortcode('[testimonial_rotator id=21]'); ?>

</section>


<?php

get_footer();
