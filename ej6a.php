<HTML>
<HEAD><TITLE> Ejercicio 6 arrays </TITLE>
    <style>
table, th, td {
  border: 1px solid black;
}

    </style>
</HEAD>
<BODY>
<?php
    $modulo1 = array("Bases Datos", "Entornos Desarrollo", "Programación");
    $modulo2 = array("Sistemas Informáticos","FOL","Mecanizado");
    $modulo3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés");


    $sumarray = array_merge($modulo1,$modulo2,$modulo3);

    $reversed=[];

    for ($i=count($sumarray)-1;$i>=0;$i--){
        if ($sumarray[$i]!="Mecanizado"){
            $reversed[]=$sumarray[$i];
        } 
    }


    print_r($reversed);


?>
</BODY>
</HTML>