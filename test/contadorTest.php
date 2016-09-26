<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCases;

class contadorTest extends PHPUnit_Framework_TestCase{

  public function testEjemplo(){
    $ar= [1,5,78,54,5,5,78,2,5,5];
    $res= contador($ar);
    ksort($res);
    $this->assertEquals([1=>1,2=>1,5=>5,54=>1,78=>2], $res);
  }

  public function testVariado(){
    $ar= [1,-5,78,0,0,54,5,5,-78,2,5,5];
    $res= contador($ar);
    ksort($res);
    $this->assertEquals([-78=>1,-5=>1,0=>2,1=>1,2=>1,5=>4,54=>1,78=>1], $res);
  }

  public function testUnValor(){
    $ar= [5];
    $res= contador($ar);
    $this->assertEquals([5=>1], $res);
  }

  public function testVacio(){
    $ar= [];
    $res= contador($ar);
    $this->assertEquals([], $res);
  }


}
?>
