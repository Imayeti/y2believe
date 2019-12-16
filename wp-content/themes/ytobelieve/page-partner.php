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
  <h1 data-aos="fade-in" data-aos-duration="2000" data-aos-once="true"  class="text-white " >Partner</h1>

</header>

<div data-aos="fade-in" data-aos-duration="2000" data-aos-once="true" class="partner-text">
  <?php the_field('main_text'); ?>
</div>


<!-- <h3 class="text-center" style="margin: 300px;">Coming Soon!</h3>
 -->
<div class="video">
  <video src="/wp-content/uploads/2019/11/Growth-of-Religions.mp4" poster="" controls>

  </video>


</div>


<h1 class="text-center">Article</h1>
<a href="https://www.christianpost.com/news/suicide-rate-kids-ages-10-to-14-nearly-tripled-last-decade-cdc.html">
  <div class="text-center temp-article rmb-5">
    <h3 class="text-center">Suicide rate for kids ages 10 to 14 nearly tripled in last decade: CDC</h3>
    <img src="/wp-content/uploads/2019/12/123669_w_760_664.jpg" alt="">
  </div>
</a>





<?php

get_footer();
