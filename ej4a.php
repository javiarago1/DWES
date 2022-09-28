<HTML>
<HEAD><TITLE> Ejercicio 4 arrays </TITLE>
    <style>
table, th, td {
  border: 1px solid black;
}

    </style>
</HEAD>
<BODY>
<?php
    $contador=0;
    $array =[];
    while (count($array)<20){
        $array[]=decbin($contador);
        $contador++;
    }
    
    $arrayReverse=[];
    for ($i=count($array)-1;$i>=0;$i--){
        $arrayReverse[]=$array[$i];
    }

    for ($i=0;$i<count($arrayReverse);$i++){
        echo $arrayReverse[$i];
        echo "<br>";
    }
?>
</BODY>
</HTML>