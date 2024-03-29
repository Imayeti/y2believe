
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


<header class="header-page text-center" style="background-image: url(<?php the_field('header_image') ?>)">
  <div class="header-blue-gradient"></div>

  <div class="header-gradient"></div>

  <h1 data-aos="fade-in" data-aos-duration="2000" class="text-white">About Us</h1>

</header>


<section id="about-us">

  <div class="about-us-text">
    <div class="heading-blue-hr-container">
      <div class="hr-full  ">  </div>
        <h2 class="text-center rmy-1 pt-1">OUR MISSION: <br>ENGAGE & EQUIP</h2>
      <div class="hr-full  ">  </div>
    </div>
    <p class="p-padding"><?php the_field('our_mission'); ?></p>
    <div class="collapse" id="collapseCoreValues">
      <div class="card card-body core-values">

    <?php  while ( have_rows('our_core_values') ) : the_row();  ?>
      <p class="opening-p">
        <?php the_sub_field('opening_paragraph'); ?>
      </p>

        <div class="core-value-ps-container">
         <div class="row">

            <div class="col-12 core-value-p col-lg-3">
              <?php the_sub_field('paragraph_one'); ?>
            </div>

            <div class="col-12 core-value-p col-lg-3">
              <?php the_sub_field('paragraph_two'); ?>
            </div>
            <div class="col-12 core-value-p col-lg-3">
              <?php the_sub_field('paragraph_three'); ?>
            </div>
            <div class="col-12 core-value-p col-lg-3">
              <?php the_sub_field('paragraph_four'); ?>
            </div>

        </div>
       <div class="row">
          <div class="col-12 core-value-p col-lg-3">
            <?php the_sub_field('paragraph_five'); ?>
          </div>

          <div class="col-12 core-value-p col-lg-3">
            <?php the_sub_field('paragraph_six'); ?>
          </div>
          <div class="col-12 core-value-p col-lg-3">
            <?php the_sub_field('paragraph_seven'); ?>
          </div>
          <div class="col-12 core-value-p col-lg-3">

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>


  <div class="text-center ">
    <button class="y2-button" type="button" data-toggle="collapse" data-target="#collapseCoreValues" aria-expanded="false" aria-controls="collapseCoreValues">
      <p>Our Core Values</p>
    </button>
  </div>


  <div class="heading-blue-hr-container pt-5">
    <div class="hr-full  ">  </div>
      <h2 class="text-center rmy-1 pt-1">OUR BELIEFS</h2>
    <div class="hr-full  ">  </div>
  </div>

  <p class="p-padding"><?php the_field('our_beliefs'); ?></p>

   <div class="row belief-icons">
    <div class="col-12 col-md-4 mt-4">
      <i class="fas fa-bible"></i>
      <h4>We believe the Bible</h4>
      <h5>is 100% without error</h5>
    </div>
    <div class="col-12 col-md-4 mt-4">
      <i class="fas fa-layer-group"></i>
      <h4>Old & New Testament </h4>
      <h5>all 66 books are inspired by God</h5>


    </div>
    <div class="col-12 col-md-4 mt-4">
      <i class="fas fa-arrow-circle-up"></i>
      <h4>Scripture is supreme</h4>
      <h5>and the final authority on all matters it addresses</h5>
    </div>
  </div>


<?php  while ( have_rows('collapsable_menu_items') ) : the_row();  ?>


    <div class="accordion " id="accordionExample">

      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Scripture
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('scripture'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseTwo"  aria-controls="collapseTwo">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Creation
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('creation'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseThree"  aria-controls="collapseThree">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                God
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('god'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseFour"  aria-controls="collapseFour">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Person of Christ
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('person_of_christ'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseFive"  aria-controls="collapseFive">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Person of the Holy Spirit
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseFive" class="collapse " aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('person_of_the_holy_spirit'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseSix"  aria-controls="collapseSix">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Mankind
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseSix" class="collapse " aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('mankind'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseSeven"  aria-controls="collapseSeven">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Redemption
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseSeven" class="collapse " aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('redemption'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseEight"  aria-controls="collapseEight">
          <div class="card-header" id="headingEight">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Justification
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseEight" class="collapse " aria-labelledby="headingEight" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('justification'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseNine"  aria-controls="collapseNine">
          <div class="card-header" id="headingNine">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Resurrection
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseNine" class="collapse " aria-labelledby="headingNine" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('resurrection'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseTen"  aria-controls="collapseTen">
          <div class="card-header" id="headingTen">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                The Church
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseTen" class="collapse " aria-labelledby="headingTen" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('the_church'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseEleven"  aria-controls="collapseEleven">
          <div class="card-header" id="headingEleven">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                Future Things
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseEleven" class="collapse " aria-labelledby="headingEleven" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('future_things'); ?>
          </div>
        </div>
      </div>


      <div class="card" >
        <div data-toggle="collapse" data-target="#collapseTwelve"  aria-controls="collapseTwelve">
          <div class="card-header" id="headingTwelve">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" >
                The Great Commission
              </button>
            </h2>
          </div>
        </div>

        <div id="collapseTwelve" class="collapse " aria-labelledby="headingTwelve" data-parent="#accordionExample">
          <div class="card-body">
          <?php the_sub_field('the_great_commission'); ?>
          </div>
        </div>
      </div>


    </div>


<?php endwhile; ?>


    </div>





</section>

<div class="dark-bg"  >
  <div class="heading-blue-hr-container">
    <div class="hr-full  ">  </div>
      <h2 class="text-center rmy-1">CURRENT LOCATIONS</h2>
    <div class="hr-full  ">  </div>
  </div>
</div>

 <div class="map-responsive">
   <div class="rmt-5" id="map"></div>
 </div>

<?php

get_footer();

?>

<script type="text/javascript">
var allSchoolsobject = JSON.parse(schoolData.mapPins);
console.log(typeof(allSchoolsobject));



</script>





<script>


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

   var infowindow = new google.maps.InfoWindow({
     content: createContent(schoolData.school)
   });

   var marker = new google.maps.Marker({
     position: schoolData.position,
     map: map,
    icon: ''
     });
   marker.addListener('click', function() {
     infowindow.open(map, marker);
   });

 }


  var map;
  function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 32.605133, lng: -80.601521},
        zoom: 4,
        disableDefaultUI: false,
        mapTypeControl: false,
        gestureHandling: 'cooperative',
        styles:


      [
{
 "elementType": "labels",
 "stylers": [
   {
     "visibility": "on"
   }
 ]
},
{
 "featureType": "administrative.land_parcel",
 "stylers": [
   {
     "visibility": "on"
   }
 ]
},
{
 "featureType": "administrative.neighborhood",
 "stylers": [
   {
     "visibility": "on"
   }
 ]
},
{
 "featureType": "poi.business",
 "stylers": [
   {
     "visibility": "on"
   }
 ]
},
{
 "featureType": "poi.park",
 "elementType": "labels.text",
 "stylers": [
   {
     "visibility": "on"
   }
 ]
},
          {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#BFBFBF"  // Example: setting the road color to grey
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "labels.text",
              "stylers": [
                  {
                      "visibility": "on"
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "labels.text",
              "stylers": [
                  {
                      "visibility": "on"
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "labels.text",
              "stylers": [
                  {
                      "visibility": "on"
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "labels.text",
              "stylers": [
                  {
                      "visibility": "on"
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


    Object.keys(allSchoolsobject).forEach(function (item) {

      createMapPins(allSchoolsobject[item]); // value
    });


  }
</script>





<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY&callback=initMap"
async defer></script>
