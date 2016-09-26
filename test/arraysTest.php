<?php
  require_once "Arrays.php";

  use PHPUnit\Framework\TestCases;

  class ArraysTest extends PHPUnit_Framework_TestCase{
    public function testExtraerNumerosArrayEnteros(){
        $a= [1,2,0,"hola",3];
        $r= extraerNumerosArray($a);
        $this->assertEquals([1,2,0,3], $r);
    }

    public function testExtraerNumerosArrayNada(){
      $a= ["hola", false];
      $r= extraerNumerosArray($a);
      //$this->assertEquals([], $r); igual que:
      $this->assertEmpty($r);
    }

    public function testExtraerNumerosArrayFloats(){
      $a= ["hola", false, 3.4];
      $r= extraerNumerosArray($a);
      $this->assertEquals([3.4], $r);
    }

    public function testExtraerNumerosArrayCadena(){
      $a= ["hola", false, 3.4, 5,"6"];
      $r= extraerNumerosArray($a);
      $this->assertEquals([3.4,5], $r);
    }

    public function testExtraerNumerosArrayNegativos(){
      $a= [-1,2,"-9","one", -1.5];
      $r= extraerNumerosArray($a);
      $this->assertEquals([-1,2,-1.5], $r);
    }
/***************************************************************/
    public function testNumerosParesArray()
    {
      $a= [-1,2,"-9","8", -1.5,4,16, 0,2.0,-8,50=>4, "a"=>6];
      $r= numerosParesArray($a);
      $this->assertEquals(8, $r);
    }

    public function testNumerosParesArrayVacio()
    {
      $a= [];
      $r= numerosParesArray($a);
      $this->assertEquals(0, $r);
    }


  }

 ?>
