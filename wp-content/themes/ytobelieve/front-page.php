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

<header class="header-home text-center" style="background-image: url('/wp-content/uploads/2019/12/MB-MG-PR3-2.jpeg')">

  <div class="header-blue-gradient"></div>
  <div class="header-home-gradient"></div>


  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >Discover Evidence <br> Find Truth </h1>


  <div class="arrow bounce">
    <a class="fas fa-chevron-down fa-2x" href="#arrows"></a>
  </div>

</header>



<section id="arrows">
   <div class="row no-gutters">

    <div class="col-12 col-md-6  order-md-2 right-arrow ">
      <img  class="" data-aos="fade-left"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out" src="/wp-content/uploads/2019/07/redarrow.png" alt="">
    </div>
    <div data-aos-once="true"  data-aos-delay="1000"  data-aos="fade-in"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="500" class="col-12 col-md-6 flip-words vision order-md-1 ">
      <h5 class="pb-4">Vision</h5>
      <p>     <?php the_field('vision'); ?></p>
   </div>
  </div>
   <div class="row no-gutters">
    <div class="col-12 col-md-6 ">
      <img  class="left-arrow float-right mobile-no-show" data-aos="fade-right"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out" src="/wp-content/uploads/2019/07/bluearrow.png" alt="">

    </div>
    <div class="col-12 col-md-6 mobile-show">
      <img  class="left-arrow float-right " data-aos="fade-right"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out" src="/wp-content/uploads/2019/07/mobilebluearrow.png" alt="">

    </div>
    <div  data-aos-once="true" data-aos-delay="1300" data-aos="fade-in"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="500" class="col-12 col-md-6 flip-words">
     <h5 class="pb-4">Mission</h5>
      <p>      <?php the_field('mission'); ?></p>
    </div>
  </div>
</section>

<section class=" testimonial-pic text-white" style="background-image: url('/wp-content/uploads/2019/07/Prayer-tent-openingV4.jpg')">
  <div class="red-bg-gradient"></div>

  <?php echo do_shortcode('[testimonial_rotator id=21]'); ?>

</section>




<?php

get_footer();
