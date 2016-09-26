<?php

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

function numCoincidencias($ar, $pos, $posRev){
  $long= count($ar);
  $cont= 0;
  for(; ($pos<$long)&&($posRev>=0)&&($ar[$pos]===$ar[$posRev]); $pos++, $posRev--,$cont++);

  return $cont;
}

?>
