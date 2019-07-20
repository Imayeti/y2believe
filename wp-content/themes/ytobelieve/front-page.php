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
<header class="header-home text-center" style="background-image: url('/wp-content/uploads/2019/07/Prayer-tent-worship-at-ThriveV3.jpg')">
  <img src="/wp-content/uploads/2019/07/logoy2b.png" alt="">

  <h1 data-aos="fade-in"
data-aos-duration="2000" class="text-white " >Y2Believe <br>Lorem Ipsum </h1>


<div class="arrow bounce">
  <a class="fas fa-chevron-down fa-2x" href="#arrows"></a>
</div>

</header>

<section id="arrows">
   <div class="row">

    <div class="col-12 col-md-6  order-md-2 right-arrow">
      <img  class="" data-aos="fade-left"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out" src="/wp-content/uploads/2019/07/rightarrow.jpg" alt="">
    </div>
    <div data-aos-once="true"  data-aos-delay="1000"  data-aos="fade-in"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="500" class="col-12 col-md-6 flip-words order-md-1">
    <h5 class="pb-4">Mission</h5>
    <p>      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


   </div>
  </div>
   <div class="row">
    <div class="col-12 col-md-6">
      <img  class="left-arrow float-right" data-aos="fade-right"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out" src="/wp-content/uploads/2019/07/leftarrow.jpg" alt="">

    </div>
    <div  data-aos-once="true" data-aos-delay="1300" data-aos="fade-in"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="500" class="col-12 col-md-6 flip-words">
     <h5 class="pb-4">Vision</h5>
      <p>      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>


</section>



<section id="testimonials">
  <div class="testimonial-pic text-white" style="background-image: url('/wp-content/uploads/2019/07/Prayer-tent-openingV4.jpg')">
    <?php echo do_shortcode('[testimonial_rotator id=21]') ;?>
  </div>
</section>

<?php

get_footer();
