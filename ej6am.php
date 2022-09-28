<HTML>

<HEAD>
    <TITLE> Multidimensional 6</TITLE>
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
    $columna=3;
    $array2d=[];
    for ($i=0;$i<$fila;$i++){
        $rowarray=[];
        for ($j=0;$j<$columna;$j++){
            $rowarray[]=rand();
        }
        $array2d[]=$rowarray;
    }


    $max=[];
    $media=[];
    for ($i=0;$i<$fila;$i++){
        $maximo=0;
        $total=0;
        for ($j=0;$j<$columna;$j++){
            $total+=$array2d[$i][$j];
            if ($array2d[$i][$j]>$maximo){
                $maximo=$array2d[$i][$j];
            }
        }
        $max[]=$maximo;
        $media[]=$total/$columna;
    } 


    print_r($array2d);


    echo "Maximos -> ";
    print_r($max);
    echo "<br>";
    echo "Media -> ";
    print_r($media);



    


    ?>

</BODY>

</HTML>