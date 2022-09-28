<HTML>

<HEAD>
    <TITLE> Ejercicio 8 arrays </TITLE>
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
    $alumnos = array(
        "pedro" => 6,
        "carlos" => 10,
        "katie" => 9,
        "dani" => 8,
        "gabriel" => 3
    );

    $value = max( $alumnos);
    $key = array_search($value,  $alumnos);
    echo "El maximo: ".$value.", la llave es: ".$key;

    echo "<br>";
    $value = min( $alumnos);
    $key = array_search($value,  $alumnos);
    echo "El minimo: ".$value.", la llave es: ".$key;
    echo "<br>";
    echo "Media -> ". array_sum($alumnos)/count($alumnos);

    ?>

</BODY>

</HTML>