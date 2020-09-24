<?php include 'person.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sample</title>
  </head>
  <body>
    <?php
      $person1 = new person("shubham","brown",24);
      echo $person1->name;
      echo $person1->eyecolor;
      echo $person1->age;
     ?>
  </body>
</html>
