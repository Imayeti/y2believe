<?php



function getPins() {
  // TODO: just loop through the posts in the custom post type, grab the fields out and then build up the below array from that data. Almost there!!


  $allSchools = [];

  $allPins = new WP_Query(array(

    'post_type' => 'googleMapPins',

  ));

  while($allPins->have_posts()) {
    $allPins->the_post();
    $schoolName =  get_field('school_name');
    $latitude =  get_field('latitude');
    $longitude =  get_field('longitude');
    array_push($allSchools, array(
      'school' => $schoolName,
      'position' =>   array(
                        'lat' => (float)$latitude,
                        'lng' => (float)$longitude
                      )

    ));
  }
  wp_reset_postdata();
  // $allSchools = [
  //   ['school' => 'this is school1', 'position' => ['lat' => '26.295558', 'lng' => '-81.577654']],
  //   ['school' => 'this is school2', 'position' => ['lat' => '26.424370', 'lng' => '-81.423657']]
  // ];

  $myJSON = json_encode($allSchools);
  return $myJSON;
}


function localized_scripts() {

  wp_localize_script('ytobelieve_main_js', 'schoolData', array(
    'mapPins' => getPins()

  ));
}

add_action('wp_enqueue_scripts', 'localized_scripts');
