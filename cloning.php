<?php

class Beverage {

  public $name;

  function __construct() {
    echo "new beverage was created.<br />";
  }

  function __clone() {
    echo "existing beverage was cloned.<br />";
  }

}
  $a = new Beverage;
  $a->name = 'coffee';
  echo $a->name . '<br />';

  $b = clone $a;
  echo $b->name . '<br />';



 ?>
