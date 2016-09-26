<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCases;

class MinimoTest extends PHPUnit_Framework_TestCase{

  public function testPositivos(){
    $ar= [2,5,67,44,2];
    $res= minimo($ar);
    $this->assertEquals(2, $res);
  }

  public function testNegativos(){
    $ar= [-2,-5,-67,-44,-2];
    $res= minimo($ar);
    $this->assertEquals(-67, $res);
  }

  public function testMezcla(){
    $ar= [3,4,6,1,65,-3,6,10];
    $res= minimo($ar);
    $this->assertEquals(-3, $res);
  }

  public function testvacio(){
    $ar= [];
    $res= minimo($ar);
    $this->assertEquals(false, $res);
  }
}
?>
