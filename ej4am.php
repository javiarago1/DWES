<HTML>

<HEAD>
    <TITLE> Multidimensional 4</TITLE>
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

    $max = "";

    for ($i=0;$i<count($array2d);$i++){
    
        for ($j=0;$j<count($array2d[$i]);$j++){
            if ($array2d[$i][$j]>$max){ 
                $max = "$i , $j";
            }
        }

    }
    echo $max;


    ?>

</BODY>

</HTML>