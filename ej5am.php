<HTML>

<HEAD>
    <TITLE> Multidimensional 5</TITLE>
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
    $array2d=[];
    for ($i=0;$i<$fila;$i++){
        $rowarray=[];
        for ($j=0;$j<$columna;$j++){
            $rowarray[]=$i+$j;
        }
        $array2d[]=$rowarray;
    }


    for ($i=0;$i<$columna;$i++){
        for ($j=0;$j<$fila;$j++){
            echo $array2d[$j][$i].",";
        }
    }

    


    ?>

</BODY>

</HTML>