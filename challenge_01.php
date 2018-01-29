<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description 'Used Bicycle';
  var $weight_kg = 0;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  function weight_lbs() {
    $lbs = $this->weight_kg * 2.2046226218;
  }

  public function set_weight_lbs($lbs) {
    $this->weight_kg = $lbs / 2.2046226218;
  }
}

$myBike = new Bicycle;
$myBike->weight_kg = 10;
echo "Weight in lbs: " . $myBike->weight_lbs() . "<br />";

$myBike->set_weight_lbs(10);
echo "Weight in kg: ". $myBike->weight_kg . "<br />";

 ?>
