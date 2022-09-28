<HTML>
<HEAD><TITLE> Ejercicio 5 arrays </TITLE>
    <style>
table, th, td {
  border: 1px solid black;
}

    </style>
</HEAD>
<BODY>
<?php
    $modulo1 = array("Bases Datos", "Entornos Desarrollo", "Programación");
    $modulo2 = array("Sistemas Informáticos","FOL","Mecanizado");
    $modulo3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés");

    $arraySuma=[];
    $totalArray = array($modulo1,$modulo2,$modulo3);


    for ($i=0;$i<count($totalArray);$i++){
        for ($j=0;$j<count($totalArray[$i]);$j++){
            $arraySuma[]=$totalArray[$i][$j];
            echo $totalArray[$i][$j];
        }
    }

    echo "<br>";

    $sumarray = array_merge($modulo1,$modulo2,$modulo3);
    

    for ($i=0;$i<count($totalArray);$i++){
        for ($j=0;$j<count($totalArray[$i]);$j++){
            array_push($arraySuma,$totalArray[$i][$j]);
            echo $totalArray[$i][$j];
        }
    }

?>
</BODY>
</HTML>