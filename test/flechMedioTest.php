<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCases;

class flechMedio extends PHPUnit_Framework_TestCase{

  public function testPar1(){
    $ar= "a<->aa";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testPar2(){
    $ar= "aa<->a";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testImpar(){
    $ar= "a<->a";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testPrincipioFalso(){
    $ar= "<->aaa";
    $res= flechMedio($ar);
    $this->assertEquals(false, $res);
  }

  public function testPrincipioTrue(){
    $ar= "<->a";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }
  public function testFinalFalso(){
    $ar= "aa<->";
    $res= flechMedio($ar);
    $this->assertEquals(false, $res);
  }

  public function testFinalTrue(){
    $ar= "a<->";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testSola(){
    $ar= "<->";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testvacio(){
    $ar= "";
    $res= flechMedio($ar);
    $this->assertEquals(false, $res);
  }

  public function testRepetidoTrue(){
    $ar= "asss<->s<->w";
    $res= flechMedio($ar);
    $this->assertEquals(true, $res);
  }

  public function testRepetidoFalso(){
    $ar= "as<->s<->w";
    $res= flechMedio($ar);
    $this->assertEquals(false, $res);
  }


}
?>
