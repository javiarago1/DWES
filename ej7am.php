<HTML>

<HEAD>
    <TITLE> Multidimensional 7</TITLE>
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

    $nombresArray = array("Carlos", "Katie", "Gabi", "Cali", "Javi", "Legolas", "Hansolo", "Luke", "John", "Naruto");
    $fila = 10;
    $columna = 5;
    $array2d = [];
    for ($i = 0; $i < $fila; $i++) {
        $rowarray = [];
        for ($j = 0; $j < $columna; $j++) {
            if ($j == 0) $rowarray[] = $nombresArray[$i];
            else $rowarray[] = rand(0, 10);
        }
        $array2d[] = $rowarray;
    }


    // reproduce table


    echo "<table>";
    for ($i=0;$i<$fila;$i++){
        echo "<tr>";
        for ($j=0;$j<$columna;$j++){
            echo "<td>".$array2d[$i][$j]."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";



    // conseguir mayor nota de asignatura




    echo "Maxima nota en lengua " . getMax(transformStringToPosition("lengua"), $array2d);
    echo "<br>";
    echo "Minima nota en lengua " . getMin(transformStringToPosition("lengua"), $array2d);
    echo "<br>";
    echo "Minima nota de Carlos ".getLowestFromStudent(array_search("Carlos", $array2d),$array2d);
    echo "<br>";
    echo "Maxima nota de Carlos ".getHighestFromStudent(array_search("Carlos",$array2d),$array2d);
    echo "<br>";
    getAverage($array2d);
    echo "<br>";
    echo "Nota media de Carlos";
    echo "<br> ";
    getAverageOfStudent(array_search("Carlos",$array2d),$array2d);


    function getMax($pos, $array2d)
    {
        $max = 0;
        for ($i = 0; $i < count($array2d); $i++) {
            if ($array2d[$i][$pos] > $max) {
                $max = $array2d[$i][$pos];
            }
        }
        return $max;
    }

    

    function getLowestFromStudent($pos,$array2d){
        $min = 0;
        for ($i=1;$i< count($array2d[0]);$i++){
            if ($i==0) $min= $array2d[$pos][$i];
            else if ($array2d[$pos][$i]<$min) $min=$array2d[$pos][$i];
        }
        return $min;
    }

    function getHighestFromStudent($pos,$array2d){
        $max = 0;
        for ($i=1;$i< count($array2d[0]);$i++){
           if ($array2d[$pos][$i]>$max) $max= $array2d[$pos][$i];
        }
        return $max;
    }

    function getAverage($array2d){
        $array = array(0,0,0,0);
        for ($i = 0; $i < count($array2d); $i++) {
            for ($j = 1; $j < count($array2d[$i]); $j++) {
                $array[$j-1] += $array2d[$i][$j];
            }
        }
        echo "Average lengua -> ".$array[0]/count($array2d);
        echo "<br>";
        echo "Average mates -> ".$array[1]/count($array2d);
        echo "<br>";
        echo "Average sociales -> ".$array[2]/count($array2d);
          echo "<br>";
        echo "Average ingles -> ".$array[3]/count($array2d);
    }

    function getAverageOfStudent($pos,$array2d){
        $media=0;
            for ($j = 1; $j < count($array2d[$pos]); $j++) {
                $media += $array2d[$pos][$j];
            }
            echo "Media -> ".($media/4);
    }


    function getMin($pos, $array2d)
    {
        $min = 0;
        for ($i = 0; $i < count($array2d); $i++) {
            if ($i == 0) $min = $array2d[$i][$pos];
            else {
                if ($array2d[$i][$pos] < $min) {
                    $min = $array2d[$i][$pos];
                }
            }
        }
        return $min;
    }


    function transformStringToPosition($str)
    {
        $position = 0;
        switch ($str) {
            case "lengua":
                $position = 1;
                break;
            case "mates":
                $position = 2;
                break;
            case "sociales":
                $position = 3;
                break;
            case "ingles":
                $position = 4;
                break;
        }
        return $position;
    }



    ?>

</BODY>

</HTML>