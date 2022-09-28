<HTML>
<HEAD><TITLE> Ejercicio 3 arrays </TITLE>
    <style>
table, th, td {
  border: 1px solid black;
}

    </style>
</HEAD>
<BODY>
<?php
    $contador=0;
    $array =[];
    while (count($array)<20){
        $array[]=decbin($contador);
        $contador++;
    }

    echo "<table> <tr>
    <th>Indice</th>
    <th>Binario</th>
    <th>Octal</th>
    </tr>";
    for ($i=0;$i<count($array);$i++){
        echo "<tr>";
   
        echo "<td>$i</td>";
        echo "<td>$array[$i]</td>";
        $octal = base_convert($array[$i], 2, 8);
        echo "<td>".$octal."</td>";
    
        echo "<tr>";

    }

    echo "</table>";
?>
</BODY>
</HTML>