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

<header class="header-home text-center" style="background-image: url('/wp-content/uploads/2019/11/Tyler-teaching-2BLUE.jpg')">


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


<!--
   <div class="map-responsive">
     <div class="rmt-5" id="map"></div>
   </div>
   <script>
     var map;
     function initMap() {
       var highSchoolOne = {lat: 38.1905, lng: -84.247};
       var highSchoolTwo = {lat: 37.1905, lng: -85.247};
       var highSchoolThree = {lat: 34.1905, lng: -86.247};
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 34.1905, lng: -86.247},
         zoom: 5,
         disableDefaultUI: true,
         mapTypeControl: false,
            gestureHandling: 'cooperative',
         styles:



         [
  {
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      },
      {
        "saturation": 100
      },
      {
        "lightness": 100
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]




       });
       var contentString = '<div id="content">'+
                  '<div class="text-center bg-success" id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="sans text-center firstHeading">High School</h1>'+
                  '<div class="text-center marker-popup" id="bodyContent">'+
                  '<p class="sans text-center" style="">info info info</p>'+
                  '<img class="" src="/wp-content/uploads/2019/07/Prayer-tent-worship-at-ThriveV2.jpg" alt="" width="100%"> '+

                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });

              var marker = new google.maps.Marker({
                position: highSchoolOne,
                map: map,
                icon: {
                   url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                 }
              });
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });



              var infowindow2 = new google.maps.InfoWindow({
                content: contentString
              });

              var marker2 = new google.maps.Marker({
                position: highSchoolTwo,
                map: map,
                icon: {
                   url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                 }
              });
              marker2.addListener('click', function() {
                infowindow2.open(map, marker2);
              });


              var infowindow3 = new google.maps.InfoWindow({
                content: contentString
              });

              var marker3 = new google.maps.Marker({
                position: highSchoolThree,
                map: map,
                icon: {
                   url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                 }
              });
              marker3.addListener('click', function() {
                infowindow2.open(map, marker3);
              });
     }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY&callback=initMap"
   async defer></script> -->



<!--
<section id="testimonials">
  <div class="testimonial-pic text-white" style="background-image: url('/wp-content/uploads/2019/11/MB-NH-3-2.jpg')">



  </div>
</section> -->

<section id="headline-bg">
  <div class="headline-bg-pic text-white" style="background-image: url('/wp-content/uploads/2019/11/MB-NH-3-2.jpg')">

    <h1 class="text-center text-white" data-aos="fade-in" data-aos-duration="1400" data-aos-easing="ease-in-out">Why/How it Works</h1>

  </div>
</section>



<section class="why-how">
  <!-- <p><?php the_field('whyhow_it_works'); ?></p> -->
   <div class="row">
    <div class="col-12 col-md-5 "  data-aos="fade-right"
  data-aos-duration="1000"
  data-aos-easing="ease-in-out">

      <img   src="/wp-content/uploads/2019/11/Michael-at-CM-Summit-2017.jpg" alt="">

    </div>
    <div class="col-12 col-md-7 md7-text-padding">
       <p class="mt-0 blue-text big-p" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
         When students arrive on a college campus, they are immediately bombarded with influences contrary to Christianity and the results have been devastating: <i>75% of Christian youth abandon their faith after High School.</i>
       </p>

       <p data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
         <b class="blue-text">Y2Believe (Y2B)</b> is mounting a full-scale effort to reverse these alarming trends by addressing issues as they arise in High School. Y2B engages students on public high school and middle school campuses with compelling evidence from history, philosophy, and science that support the truth of Christianity while giving them an opportunity to respond to the Gospel.
       </p>

       <p data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
         <b class="blue-text">Y2B</b> partners with existing Christian ministries on public school campuses, bringing lively discussions on topics of significant interest to students. These core discussion topics (the Apologetic Fundamentals) are address with students over 4 weeks :
       </p>

        <ul class="rmt-1 rmb-3" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <li class="">Who are you? What is Truth? Are there Moral Absolutes?</li>
          <li class="">What Evidence is there that God Exists?</li>
          <li class="">Is the Bible Trustworthy?</li>
          <li class="">Why is there So Much Evil in the World?</li>
        </ul>





      <p data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
        <b class="blue-text">Y2B</b> instills students with clear, rational, open-minded thinking skills informed by apologetic evidence. Teaching students to think critically allows them to provide engaging responses to challenges to their faith based on evidence. Students engage their peers to evaluate why they believe what they believe and to support their truth claims with evidence.
      </p>

      <p data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
        <b class="blue-text">Y2B</b> empowers students with life-changing irrefutable evidence for biblical truths while sharpening student’s skills for winsome engagement. Y2B develops students to become the most magnetic and prominent influencers on campus leading their peers to live the best life as God intended and then going on to live out the Great Commission all their lives.
      </p>


    </div>
  </div>

</section>


<section id="headline-bg">
  <div class="headline-bg-pic text-white" style="background-image: url('/wp-content/uploads/2019/11/Michael-at-Aletheia5.jpg')">

    <h1 class="text-center text-white" data-aos="fade-in" data-aos-duration="1400" data-aos-easing="ease-in-out">About Us</h1>

  </div>
</section>


<section id="about-us">
  <h4 class="text-center">Y2Believe engages students on public high school and middle school campuses with compelling evidence from history, philosophy, and science that support the truth of Christianity while giving them an opportunity to respond to the Gospel.</h4>
  <h4 class="text-center">Y2Believe empowers students with life-changing irrefutable evidence for biblical truths while sharpening student’s skills for winsome engagement. </h4>
  <h4 class="text-center">Y2Believe develops students to become the most magnetic and prominent influencers on campus leading their peers to live the best life as God intended and then going on to live out the Great Commission all their lives.</h4>

</section>


<?php

get_footer();
