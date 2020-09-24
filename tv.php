<?php
/**
 *
 */
class tv{
  protected $model; // for using in child classes.
  public $volume;

  public function __construct($m ,$v)
  {
    $this->model = $m;
    $this->volume = $v;
  }
//encapusulation..
  public function getName()
  {
    return $this->model;
  }
}


 ?>

<?php

/*$tv1 = new tv("panasonic","43");
  echo $tv1->getName();
  echo $tv1->volume;*/
/**
 *
 */
class plasma extends tv
{
  public function getName()
  {
    return $this->model;
  }
}

$plasma1 = new plasma('LG','76');
  echo $plasma1->getName();


 ?>
