<?php

/**
 *
 */
interface a
{
  public function abc();
}

/**
 *
 */
interface b
{
  public function xyz();

}


class c implements a,b{

  public function abc()
  {
    echo " abc function";
  }

  public function xyz()
  {
    echo " xyz function";
  }
}


$class_c = new c;
$class_c->abc();

 ?>
