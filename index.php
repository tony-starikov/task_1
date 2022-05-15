<?php

// Test info class
class Person {
  public $thing1 = 200;
  public $thing2 = 200;
  public $thing3 = 200;
  public $thing4 = 200;
}

// Declare function to calculate 
function getMoneyBack (Object $things, int $insurance) : int {
	
  $losses = 0;
  
  foreach($things as $thing) {
    $losses += $thing;
  }
  
  return abs($losses - $insurance);
}

$Ivan = new Person();

echo getMoneyBack($Ivan, 900);