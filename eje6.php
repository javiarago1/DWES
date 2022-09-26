<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
$num=5;
$temp = $num;
$total=1;
while ($temp>0){
    $total*=$temp;
    $temp--;
}

echo "Factorial de $num -> ".$total;


?>
</BODY>
</HTML>
