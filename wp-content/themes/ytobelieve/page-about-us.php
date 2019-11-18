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


<header class="header-page text-center" style="background-image: url('/wp-content/uploads/2019/11/Michael-at-Aletheia5.jpg')">
  <div class="header-gradient"></div>

  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >About Us</h1>




</header>


<section id="about-us">

  <h4  data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"class="text-center">Y2Believe <strong class="blue-text"> engages</strong>  students on public high school and middle school campuses with compelling evidence from history, philosophy, and science that support the truth of Christianity while giving them an opportunity to respond to the Gospel.</h4>

  <div data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="hr-medium">  </div>

  <h4 data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="text-center">Y2Believe<strong class="blue-text"> empowers</strong>   students with life-changing irrefutable evidence for biblical truths while sharpening student’s skills for winsome engagement. </h4>


    <div data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="hr-medium">  </div>

  <h4 data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="text-center"> Y2Believe<strong class="blue-text "> develops </strong> students to become the most magnetic and prominent influencers on campus leading their peers to live the best life as God intended and then going on to live out the Great Commission all their lives.</h4>

</section>
<div class="dark-bg"  >
  <div class="locations">
    <div class="hr-full  ">  </div>


      <h2 class="text-center rmy-1 pt-1 ">Current Locations</h2>

    <div class="hr-full  ">  </div>

  </div>
</div>


<h5 class="text-center"></h5>


<div class="map-responsive">
     <div class="rmt-5" id="map"></div>
   </div>
   <script>
     var map;
     function initMap() {

       var highSchoolOne = {lat: 26.295558, lng: -81.577654};
       var highSchoolTwo = {lat: 26.424370, lng: -81.423657};
       var highSchoolThree = {lat: 26.440823, lng: -81.809980};
       var highSchoolFour = {lat: 26.272427,  lng: -81.724038};
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 26.424370, lng: -90.423657},
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

       //todo: add a function that creates all markers from an array of names. eventually create a way to add a new marker including lat and long.
        function createContent(heading, info) {
          return '<div id="content">'+
                     '<div id="siteNotice">'+
                     '</div>'+
                     '<h5 id="firstHeading" class="firstHeading sans">' + heading + '</h5>'+
                     '<div id="bodyContent">'+
                     '<p class="sans text-center" style="text-align: center"></p>'+

                     '</div>'+
                     '</div>';
        }

              var infowindow = new google.maps.InfoWindow({
                content: createContent('Palmetto Ridge High School')
              });

              var marker = new google.maps.Marker({
                position: highSchoolOne,
                map: map,
             icon: ''
              });
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });






              var infowindow2 = new google.maps.InfoWindow({
                  content: createContent('New Horizons Estero UMC')
              });

              var marker2 = new google.maps.Marker({
                position: highSchoolTwo,
                map: map,
             icon: ''
              });
              marker2.addListener('click', function() {
                infowindow2.open(map, marker2);
              });





              var infowindow3 = new google.maps.InfoWindow({
                content: createContent('Immokalee High School')
              });

              var marker3 = new google.maps.Marker({
                position: highSchoolThree,
                map: map,
             icon: ''
              });
              marker3.addListener('click', function() {
                infowindow3.open(map, marker3);
              });




              var infowindow4 = new google.maps.InfoWindow({
                 content: createContent('New Horizons St Monica\'s')
              });

              var marker4 = new google.maps.Marker({
                position: highSchoolFour,
                map: map,
             icon: ''
              });
              marker4.addListener('click', function() {
                infowindow4.open(map, marker4);
              });
     }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY&callback=initMap"
   async defer></script>




<?php

get_footer();
