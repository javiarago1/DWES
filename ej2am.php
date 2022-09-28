<HTML>

<HEAD>
    <TITLE> Multidimensional 2</TITLE>
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
    $max=3;
    $counter=2;
    $array2d=[];
    for ($i=0;$i<$max;$i++){
        $rowarray=[];
        for ($j=0;$j<$max;$j++,$counter+=2){
            $rowarray[]=$counter;
        }
        $array2d[]=$rowarray;
    }

    
    $sumColumns=array(0,0,0);
    $sumsRows=[];
    for ($i=0;$i<count($array2d);$i++){
        $sum=0;
        for ($j=0;$j<count($array2d[$i]);$j++){
            $sum+=$array2d[$i][$j];
            $sumColumns[$j]+=$array2d[$i][$j];
        }
        $sumsRows[]=$sum;
    }

    print_r($sumsRows);
    echo "<br>";
    print_r($sumColumns);


    ?>

</BODY>

</HTML>