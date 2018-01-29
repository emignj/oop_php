<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description 'Used Bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels}";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public funtion set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $lbs = floatval($this->weight_kg) * 2.2046226218 . " lbs";
  }

  public function set_weight_lbs($lbs) {
    floatval($this->weight_kg) = $lbs / 2.2046226218;
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$cd = new Bicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->year = '2016';


 ?>
