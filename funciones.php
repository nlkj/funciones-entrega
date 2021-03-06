<?php
/**
* Libreria de funciones para el ejercicio.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/

/**
* Función que encuentra el máximo de un array de enteros.
*
* Función que recibe como argumento un array de enteros
* y devuelve como resultado el valor máximo.
*
* @param int[] $ar Array de enteros.
*
* @return int El valor máximo del array de entrada $ar.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function maximo($ar){
  if(!is_array($ar) || count($ar)===0)
    $max= false;
  else{
    $max= $ar[0];
    for ($i=1; $i<count($ar); $i++){
      if($ar[$i]>$max)
        $max= $ar[$i];
    }
  }

  return $max;
}

/**
* Función que encuentra el mínimo de un array de enteros.
*
* Función que recibe como argumento un array de enteros
* y devuelve como resultado el valor mínimo.
*
* @param int[] $ar Array de enteros.
*
* @return int El valor mínimo del array de entrada $ar.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function minimo($ar){
  if(!is_array($ar) || count($ar)===0)
    $min= false;
  else{
    $min= $ar[0];
    for ($i=1; $i<count($ar); $i++){
      if($ar[$i]<$min)
        $min= $ar[$i];
    }
  }

  return $min;
}

/**
* Función que informa si la secuencia "<->" se encuentra
* en el centro de la cadena de entrada.
*
* Función que recibe como argumento una cadena de caracteres
* y devuelve como resultado un boleano que informa si la
* secuencia "<->" se encuentra en el centro.
*
* @param string $ar Cadena de entrada.
*
* @return bool Si la cadena "<->" está en el centro devuelve true.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function flechMedio($ar)
{
  $long= strlen($ar);
  $res= false;

  if($long>=3){
    $impar= $long%2;
    if($impar){
        $mitad= ($long-1)/2;
        if(($ar[$mitad-1]==="<") && ($ar[$mitad]==="-") && ($ar[$mitad+1]===">"))
          $res= true;
    }
    else{
        $mitad= $long/2;
        if($ar[$mitad]!=="-")
          $mitad--;

        if($ar[$mitad]==="-") {
          if(($ar[$mitad-1]==="<") && ($ar[$mitad+1]===">"))
            $res= true;
        }
    }
  }

  return $res;
}

/**
* Función que informa de cuántas veces aparece cada número
* en un array de enteros.
*
* Función que recibe como argumento un array de enteros
* y devuelve como resultado un array asociativo indicando,
* para cada valor del array de entrada, cuántas veces aparece.
*
* @param int[] $ar Array de enteros.
*
* @return int[] Array asociativo que devuelve cuántas veces
* aparece cada valor de $ar.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function contador($ar){
  $res=[];
  foreach ($ar as $value) {
        if(!isset($res[$value]))
          $res[$value]= 1;
        else
          $res[$value]++;
  }
  return $res;
}

/**
* Función que informa del tamaño de la mayor sección espejo de
* un array.
*
* Función que recibe como argumento un array de enteros
* y devuelve como resultado el tamaño de la mayor sección
* espejo.
*
* @param int[] $ar Array de enteros.
*
* @return int tamaño de la mayor sección espejo de $ar.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function espejoMayor($ar){
  $ar_rev= array_reverse($ar);
  $long= count($ar);
  $mayor= 0;

  foreach ($ar as $key => $value) {
    for($posRev=$long-1; $posRev>0; $posRev--){
        if($value===$ar[$posRev]){
          $res= numCoincidencias($ar, $key, $posRev);
          if($res>$mayor)
            $mayor= $res;
        }
    }
  }

  return $mayor;
}

/**
* Función utilizada por espejoMayor.
*
* Función que recibe como argumento un array de enteros, y los
* índices $pos y $posRev. Cuenta los valores del array que
* son iguales para posiciones crecientes desde $pos y
* decrecientes desde $posRev.
*
* @param int[] $ar Array de enteros.
* @param int $pos Índice creciente.
* @param int $posRev Índice decreciente.
*
* @return int Cuántos valores han coincidido.
*
* @author anónimo <anonimo@gmail.com>
* @license GPL
*/
function numCoincidencias($ar, $pos, $posRev){
  $long= count($ar);
  $cont= 0;
  for(; ($pos<$long)&&($posRev>=0)&&($ar[$pos]===$ar[$posRev]); $pos++, $posRev--,$cont++);

  return $cont;
}

?>
