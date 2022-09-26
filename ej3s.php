<HTML>

<HEAD><TITLE> EJ2-Direccion Red – Broadcast y Rango</TITLE></HEAD>

<BODY>
    <?php
    $ip = "192.168.16.100/16";
    $num = $ip;
    $ip1 = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip2 = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip3 = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip4 = substr($ip, 0);

    $mascara = substr($ip, strpos($ip, '/')+1,strlen($ip));
    $binario = str_pad(decbin($ip1),8,"0",STR_PAD_LEFT).str_pad(decbin($ip2),8,"0",STR_PAD_LEFT).str_pad(decbin($ip3),8,"0",STR_PAD_LEFT).str_pad(decbin($ip4),8,"0",STR_PAD_LEFT);

    $convertido = str_pad(substr($binario,0,$mascara),32,"0",STR_PAD_RIGHT);
    $convertido1 = str_pad(substr($binario,0,$mascara),32,"1",STR_PAD_RIGHT);


    $dominio="";
    $broadcast="";
    $dominio.=bindec(substr($convertido, 0,8)).".".bindec(substr($convertido,8,8)).".".bindec(substr($convertido,16,8)).".".bindec(substr($convertido,24,8));
    $broadcast.=bindec(substr($convertido1, 0,8)).".".bindec(substr($convertido1,8,8)).".".bindec(substr($convertido1,16,8)).".".bindec(substr($convertido1,24,8));
    $minimo = bindec(substr($convertido, 0,8)).".".bindec(substr($convertido,8,8)).".".bindec(substr($convertido,16,8)).".".(bindec(substr($convertido,24,8))+1);
    $maximo = bindec(substr($convertido1, 0,8)).".".bindec(substr($convertido1,8,8)).".".bindec(substr($convertido1,16,8)).".".(bindec(substr($convertido1,24,8))-1);

    echo "IP -> ".$num;
    echo "<br>";
    echo "Mascara -> ".$mascara;
    echo "<br>";
    echo "Direccion Red -> ".$dominio;
    echo "<br>";
    echo "Direccion Broadcast -> ".$broadcast;
    echo "<br>";
    echo "Rango: ".$minimo." a ".$maximo;

    
    ?>
</BODY>

</HTML>