<HTML>
<HEAD><TITLE> Ejercicio 2 arrays </TITLE>
    <style>
table, th, td {
  border: 1px solid black;
}

    </style>
</HEAD>
<BODY>
<?php
$contador=0;
$arrayImpares =[];
$arrayPares =[];
while (count($arrayImpares)<20){
    if ($contador%2!=0){
        $arrayImpares[]=$contador; 
    } else {
        $arrayPares[]=$contador; 
    }
    $contador++;
}



echo "Media impares -> ".mediaDeArray($arrayImpares);
echo "<br>";
echo "Media pares -> ".mediaDeArray($arrayPares);

function mediaDeArray($array){
    for($i=0,$suma=0;$i<count($array);$i++){
        $suma+=$array[$i];
    }
    return ($suma/count($array));
}


?>
</BODY>
</HTML>