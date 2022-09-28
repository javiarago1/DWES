<HTML>
<HEAD><TITLE> Ejercicio 1 arrays </TITLE>
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
$impares=0;
while (count($array)<20){
    if ($contador%2!=0){
        $array[]=$contador; 
    }
    $contador++;
}

echo "<table> <tr>
<th>Indice</th>
<th>Valor</th>
<th>Suma</th>
</tr>";

$suma=0;

for ($i =0;$i<count($array);$i++){
    echo "<tr>";
   
    echo "<td>$i</td>";
    echo "<td>$array[$i]</td>";
    $suma+=$array[$i];
    echo "<td>".$suma."</td>";

    echo "<tr>";
}
echo "</table>";


?>
</BODY>
</HTML>