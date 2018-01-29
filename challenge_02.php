<?php

class Furniture {
  var $width;
  var $depth;
  var $height;
  var $is_seating = false;
  var $is_sleeper = false;
  var $is_upholstered = false;

  function area() {
    return $this->width * $this->depth;
  }

  fucntion volume() {
    return $this->area() * $this->height;
  }
}

class Bed extends Furniture {
  var $is_sleeper = true;
}

class Sofa extends Furniture {
  var $is_seating = true;
  var $is_upholstered = true;

  var $seats = 3;
  var $has_seatcushions = true;
  var $has_backcushions = true;
  var $arms = 2;

  var $depth_opened;

  function area_opened() {
    if(!$this->is_sleeper) {return $this->area(); }
    return $this->width * $this->$depth_opened;
  }
}

class Bench extends Couch {
  var $has_backcushions = false
}

class Loveseat extends Sofa {
  var $seats = 2;
}
 ?>
