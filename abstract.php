<?php

/**
 *abstact class
 */
abstract class baseEmployee
{
  protected $firstname;
  protected $lastname;

  public function getName()
  {
    return $this->firstname . " " . $this->lastname;
  }

  public abstract function getMonthlySalary();//abstract function

  public function __construct($f, $l)
  {
    $this->firstname = $f;
    $this->lastname = $l;
  }
}


class fullTimeEmployee extends baseEmployee{

  protected $annualSalary;

  public function getMonthlySalary()
  {
    return " ".$this->annualSalary / 12;
  }
}

/**
 *
 */
class partTimeEmployee extends baseEmployee
{
  protected $hourlyRate;
  protected $totalTime;

  function getMonthlySalary()
  {
    return " ". $this->hourlyRate * $this->totalTime;
  }

  public function __construct($f,$l,$h,$t){
    $this->firstname = $f;
    $this->lastname = $l;
    $this->hourlyRate = $h;
    $this->totalTime = $t;
  }
}


$fullTime = new fullTimeEmployee('shubham','sharma',300000);
$partTime = new partTimeEmployee('mohit','sharma',200,100);

echo $fullTime->getName()." ";
echo $partTime->getName();

echo $partTime->getMonthlySalary();
 ?>
