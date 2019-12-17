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


<header class="header-page text-center" style="background-image: url('/wp-content/uploads/2019/12/Michael-at-Aletheia5.jpg')">
  <div class="header-blue-gradient"></div>

  <div class="header-gradient"></div>

  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white " >About Us</h1>




</header>


<section id="about-us">

  <h4  data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true"class="text-center"><?php the_field('engages'); ?></h4>

  <div data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="hr-medium"></div>

  <h4 data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="text-center"><?php the_field('empowers'); ?></h4>


  <div data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="hr-medium"></div>

  <h4 data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true" class="text-center"><?php the_field('develops'); ?></h4>

</section>

<div class="dark-bg"  >
  <div class="locations">
    <div class="hr-full  ">  </div>
      <h2 class="text-center rmy-1 pt-1">Current Locations</h2>
    <div class="hr-full  ">  </div>
  </div>
</div>


<h5 class="text-center"></h5>


 <div class="map-responsive">
   <div class="rmt-5" id="map"></div>
 </div>

   <script>

   // var fruits = ["apple", "orange", "cherry"];
   //  fruits.forEach(myFunction);

    function myFunction(item, index) {
      console.log(item, index);;
    }

   var allSchoolsArray = [{school: 'this is school1', position: {lat: 26.295558, lng: -81.577654}}, {school: 'this is school2', position: {lat: 26.424370, lng: -81.423657}}];


    allSchoolsArray.forEach(createMapPins);

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


    function createMapPins(schoolData,index) {
      console.log(schoolData.school);
      console.log(schoolData.position);

      console.log(index);

      // var infowindow = new google.maps.InfoWindow({
      //   content: createContent(schoolData.school)
      // });
      //
      // var marker = new google.maps.Marker({
      //   position: schoolData.position,
      //   map: map,
      //  icon: ''
      //   });
      // marker.addListener('click', function() {
      //   infowindow.open(map, marker);
      // });

    }

     var map;
     function initMap() {



       var highSchoolOne = {lat: 26.295558, lng: -81.577654};
       var highSchoolTwo = {lat: 26.424370, lng: -81.423657};
       var highSchoolThree = {lat: 26.440823, lng: -81.809980};
       var highSchoolFour = {lat: 26.272427,  lng: -81.724038};
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 26.424370, lng: -90.423657},
         zoom: 5,
         disableDefaultUI: false,
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

     }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY&callback=initMap"
   async defer></script>




<?php

get_footer();
