<?php

/**
 *
 */
class abc{

  public static $objectCount = 0;

  public static function getCount(){
    return self::$objectCount;
  }

  public function __construct()
  {
    self::$objectCount++;
  }
}

$a = new abc();
$b = new abc();
$c = new abc();
$d = new abc();
$e = new abc();

echo abc::getCount();


/*(for accesing in child class)
class xyz extends abc
{

  public static function some()
  {
    parent::getCount();
  }
}

$a = new xyz();
$c = new xyz();
$b = new xyz();
$e = new xyz();
$f = new xyz();
$g = new xyz();

echo xyz::getCount();
*/
 ?>
