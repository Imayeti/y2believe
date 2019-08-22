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

<header class="header-home text-center" style="background-image: url('http://y2believe.local/wp-content/uploads/2019/08/Prayer-tent-openingV4-1.jpg')">


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
    data-aos-duration="500" class="col-12 col-md-6 flip-words order-md-1">
    <h5 class="pb-4">Mission</h5>
    <p>      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


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
     <h5 class="pb-4">Vision</h5>
      <p>      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>


</section>

<!-- <section id="map">

  <div class="map-container" >
    <img class="US-map" src="/wp-content/uploads/2019/08/usa-map-grey.jpg" alt="">
    <img class="pin-one" src="/wp-content/uploads/2019/08/pin.png" alt="">
  </div>


</section> -->



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
   async defer></script>




<section id="testimonials">
  <div class="testimonial-pic text-white" style="background-image: url('/wp-content/uploads/2019/08/Tyler-students-sitting-on-floor-v2.jpg')">
    <?php echo do_shortcode('[testimonial_rotator id=21]') ;?>
  </div>
</section>

<?php

get_footer();
