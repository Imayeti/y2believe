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


<header class="header-about-us text-center" style="background-image: url('/wp-content/uploads/2019/11/Michael-at-Aletheia5.jpg')">
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


   <!-- <div class="map-responsive">
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
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading sans">High School</h1>'+
                  '<div id="bodyContent">'+
                  '<p class="sans text-center" style="text-align: center">info info info</p>'+

                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString
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
                content: contentString
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
                content: contentString
              });

              var marker3 = new google.maps.Marker({
                position: highSchoolThree,
                map: map,
             icon: ''
              });
              marker3.addListener('click', function() {
                infowindow2.open(map, marker3);
              });
     }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY&callback=initMap"
   async defer></script>
 -->





<?php

get_footer();
