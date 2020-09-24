<?php


/*class person {
  protected $first = 'shubham';
  private $last = 'sharma';
  private $age = '25';


}

class man extends person
{
  public function owner(){
    $a = $this->first;
    return $a;
  }
}*/

/**
 *
 */
/*class person {
  public $name;
  public $eyecolor;
  public $age;

  public function setname($name){
    $this->name = $name;
  }
}*/

/**constuctors
 *
 */
class person {
  public $name;
  public $eyecolor;
  public $age;

  public function __construct($name,$eyecolor,$age){
    $this->name = $name;
    $this->eyecolor = $eyecolor;
    $this->age = $age;
  }


}




 ?>
