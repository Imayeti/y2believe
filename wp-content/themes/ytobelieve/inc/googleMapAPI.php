<?php

function getPins() {
  $myObj = new stdClass();
  $myObj->name = "John";
  $myObj->age = 30;
  $myObj->city = "New York";
  $myJSON = json_encode($myObj);
  return $myJSON;
}


function localized_scripts() {
  wp_localize_script('ytobelieve_main_js', 'universityData', array(
    'mapPins' => getPins()

  ));
}

add_action('wp_enqueue_scripts', 'localized_scripts');
