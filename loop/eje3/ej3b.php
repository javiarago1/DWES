<HTML>

<HEAD>
    <TITLE> EJ3B – Conversor Decimal a base 16</TITLE>
</HEAD>

<BODY>
    <?php
    $caracteresHexadecimales = "0123456789ABCDEF";
    $numero = "1515";
    $base = "16";
    $str = "";
    while ($numero > 0) {
        $mod = $numero % 16;
        $str = $caracteresHexadecimales[$mod].$str;
        $numero = intdiv($numero, 16);
       
    }
    echo $str;
    ?>
</BODY>

</HTML>