<HTML>

<HEAD>
    <TITLE> Ejercicio 7 arrays </TITLE>
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
        "pedro" => 18,
        "carlos" => 30,
        "katie" => 29,
        "dani" => 16,
        "gabriel" => 2
    );

    foreach ($alumnos as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo next($alumnos);
    echo "<br>";
    echo next($alumnos);
    echo "<br>";
    echo end($alumnos);


    asort($alumnos);
    foreach ($alumnos as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

</BODY>

</HTML>