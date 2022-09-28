<HTML>

<HEAD>
    <TITLE> Multidimensional 3</TITLE>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</HEAD>

<BODY>
    <?php
    $fila=3;
    $columna=5;
    $counter=2;
    $array2d=[];
    for ($i=0;$i<$fila;$i++){
        $rowarray=[];
        for ($j=0;$j<$columna;$j++,$counter+=2){
            $rowarray[]=$counter;
        }
        $array2d[]=$rowarray;
    }

    // leer por filas
    for ($i=0;$i<count($array2d);$i++){
        for ($j=0;$j<count($array2d[$i]);$j++){
            echo $array2d[$i][$j].",";
        }

    }

    echo "<br>";

    // leer por columnas
    for ($i=0;$i<$columna;$i++){
        for ($j=0;$j<$fila;$j++){
            echo $array2d[$j][$i].".";
        }
    }


    ?>

</BODY>

</HTML>