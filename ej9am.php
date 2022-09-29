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

        $matriz = Array(
            array(1,2,3,4),
            array(5,6,7,8),
            array(9,10,11,12)
        );



        echo "<h3>Original</h3>";
        mostrarMatriz($matriz);
        echo "<h3>Transpuesta</h3>";
        mostrarMatriz(transponer($matriz)); 
        echo "<h3>Vuelvo a transponer</h3>";
        mostrarMatriz(transponer(transponer($matriz)));
       
        
        


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


        function transponer($matriz){
            $matrizTranspuesta=[];
            for ($i=0;$i<count($matriz[0]);$i++){
                $row=[];
                for ($j=0;$j<count($matriz);$j++){
                    $row []=$matriz[$j][$i];
                }
                $matrizTranspuesta[]=$row;
            }
            return $matrizTranspuesta;
        }
    ?>

</BODY>

</HTML>