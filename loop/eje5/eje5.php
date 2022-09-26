<HTML>
<HEAD><TITLE> EJ5B – Tabla multiplicar con TD</TITLE><style>

table, th, td {
  border: 1px solid;
}
</style></HEAD>
<BODY>
<?php
$num="8";

echo "<table>";
for ($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$num x $i </td> ". "<td>".$num * $i."</td>";
    echo "</tr>";
}

echo "</table>";
?>
</BODY>
</HTML>