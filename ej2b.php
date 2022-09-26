<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
$num="48";
$base2="2";
$base4="4";
$base6="6";
$base8="8";

echo "Numero $num en base $base2 es ".baseConverter($num,$base2);
echo "<br>";
echo "Numero $num en base $base4 es ".baseConverter($num,$base4);
echo "<br>";
echo "Numero $num en base $base6 es ".baseConverter($num,$base6);
echo "<br>";
echo "Numero $num en base $base8 es ".baseConverter($num,$base8);



function baseConverter ($numero,$base){
    $str = "";
    while ($numero>0){
        $mod = $numero % $base;
        $numero = intdiv($numero,$base);
        $str .= $mod; 
    }
    return strrev($str);
}

?>
</BODY>
</HTML>
