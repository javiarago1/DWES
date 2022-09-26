<HTML>

<HEAD>
    <TITLE> EJ1B – Conversor decimal a binario</TITLE>
</HEAD>

<BODY>
    <?php
    $numero = "127";
    $str = "";
    while ($numero>0){
        $mod = $numero % 2;
        $numero = intdiv($numero,2);
        $str .= $mod; 
    }
    echo "Decimal -> $numero"."  Binario -> ".strrev($str);

    ?>
</BODY>

</HTML>