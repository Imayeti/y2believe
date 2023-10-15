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

    <div class=" text-center address col-12  order-md-1">
        <div class="text-center rmb-4 give-button">
            <a href="https://give.tithe.ly/?formId=a1108b63-6865-11ee-90fc-1260ab546d11"><p>Give</p></a>
        </div>
    </div>


   <div class=" info row">





        <div class=" text-center address col-12 col-md-4 order-md-2">
            <h6 class="">Y2Believe</h6>
            <p>16295 S Tamiami Trl #195</p>
            <p>Fort Myers, FL 33908</p>
        </div>

        <div class=" text-center col-12 col-md-4 mobile-margin-top ">
            <h6 >Contact</h6>
            <p><a href="tel:334-569-6026">334-569-6026</a></p>
            <p><a href="mailto:mbossman@y2believe.org">mbossman@y2believe.org</a></p>

        </div>

        <div class=" text-center col-12 col-md-4 mobile-margin-top ">
            <h6 >Social</h6>
            <div class="d-flex footer-social">
                <div class="icon-padding" style="padding-left: 0;">
                    <a href="https://www.instagram.com/y2believe/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#ffffff"/></svg>
                    </a>
                </div>

                <div class="facebook-padding">
                    <a href="https://www.facebook.com/profile.php?id=61551627014682" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" fill="#ffffff"/></svg>
                    </a>
                </div>
            </div>

        </div>



  </div>

    <div class="text-center rmb-4 student-login-button rmt-4">
        <a href="<?php echo site_url('right-now-media-link') ?>"><p>Student Login Portal</p></a>
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
