<HTML>

<HEAD>
    <TITLE> Multidimensional 1 </TITLE>
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
    echo "<table>";
    $counter=2;
    $array2d=[];
    for ($i=0;$i<$max;$i++){
        $rowarray=[];
        echo "<tr>";
        for ($j=0;$j<$max;$j++,$counter+=2){
            echo "<td>".$counter."</td>";
            $rowarray[]=$counter;
        }
        echo "</tr>";
        $array2d[]=$rowarray;
    }

    echo "</table>";

    print_r($array2d);

    ?>

</BODY>

</HTML>