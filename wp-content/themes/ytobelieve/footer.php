<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ytobelieve
 */

?>
<footer>
  <div class="text-center rmb-4 student-login-button">
    <a href="<?php echo site_url('right-now-media-link') ?>"><p>Student Login Portal</p></a>
  </div>

   <div class=" info row">
     <div class="col">

     </div>



     <div class=" text-center address col-12 col-md-3">
       <h6 class="">Y2Believe</h6>
       <p>16295 S Tamiami Trl #195</p>
       <p>Fort Myers, FL 33908</p>
     </div>


     <div class=" text-center col-12 col-md-3 mobile-margin-top desktop-padding-left">
       <h6 >Contact</h6>
       <p><a href="tel:334-569-6026">334-569-6026</a></p>
       <p><a href="mailto:mbossman@y2believe.org">mbossman@y2believe.org</a></p>
     </div>

     <div class="col">

     </div>


  </div>


</footer>


<?php wp_footer(); ?>
<script>
AOS.init({
startEvent: 'load',
});
</script>
</body>
</html>
