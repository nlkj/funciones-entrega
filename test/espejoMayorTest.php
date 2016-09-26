<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCases;

class espejoMayorTest extends PHPUnit_Framework_TestCase{

  public function testEjemplo1(){
    $ar= [1,2,3,8,9,3,2,1,5];
    $res= espejoMayor($ar);
    $this->assertEquals(3, $res);
  }

  public function testEjemplo2(){
    $ar= [1,2,1,4];
    $res= espejoMayor($ar);
    $this->assertEquals(3, $res);
  }

  public function testSimetrico(){
    $ar= [1,2,3,2,1];
    $res= espejoMayor($ar);
    $this->assertEquals(5, $res);
  }

  public function testNinguno(){
    $ar= [1,2,3,4,5];
    $res= espejoMayor($ar);
    $this->assertEquals(1, $res);
  }

  public function testIguales(){
    $ar= [0,0,0,0,0,0];
    $res= espejoMayor($ar);
    $this->assertEquals(6, $res);
  }


}
?>
