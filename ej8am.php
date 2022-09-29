<HTML>

<HEAD>
    <TITLE> Multidimensional 8</TITLE>
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

        $matriz1 = Array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
        );

        $matriz2 = Array(
            array(9,8,7),
            array(6,5,4),
            array(3,2,1)
        );

        mostrarMatriz(sumarMatrices($matriz1,$matriz2));
        mostrarMatriz(multiplicarMatrices($matriz1,$matriz2));

        


        function mostrarMatriz($matriz){
            echo "<table>";
            for ($i =0; $i<count($matriz);$i++){
                echo "<tr>";
                for ($j=0;$j<3;$j++){
                     echo "<td>".$matriz[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }


        function multiplicarMatrices($matriz1,$matriz2){
            $resultMatriz =[];
            for ($i =0; $i< 3;$i++){
                $row=[];
                for ($j=0;$j<3;$j++){
                    $row[]=$matriz1[$i][$j]*$matriz2[$j][$i];
                }
                $resultMatriz[]=$row;
            }
            return $resultMatriz;
        }

        function sumarMatrices($matriz1,$matriz2){
            $resultMatriz =[];
            for ($i =0; $i< 3;$i++){
                $row=[];
                for ($j=0;$j<3;$j++){
                    $row[]=$matriz1[$i][$j]+$matriz2[$i][$j];
                }
                $resultMatriz[]=$row;
            }
            return $resultMatriz;
        }
    ?>

</BODY>

</HTML>