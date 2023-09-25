<?php

$semestre1 = array(
    $curso1 = array(
        "curso" => "matematica",
        "creditos" => 5,
        "nota" => 13,
    ),
    $curso2 = array(
        "curso" => "filosofia",
        "creditos" => 3,
        "nota" => 18,
    ),
    $curso3 = array(
        "curso" => "geometria",
        "creditos" => 4,
        "nota" => 15,
    ),
);
$semestre2 = array(
    $curso1 = array(
        "curso" => "matematica2",
        "creditos" => 5,
        "nota" => 13,
    ),
    $curso2 = array(
        "curso" => "estadistica",
        "creditos" => 3,
        "nota" => 18,
    ),
    $curso3 = array(
        "curso" => "fisica1",
        "creditos" => 4,
        "nota" => 15,
    ),
);
$semestre3 = array(
    $curso1 = array(
        "curso" => "matematica 3",
        "creditos" => 5,
        "nota" => 13,
    ),
    $curso2 = array(
        "curso" => "redes",
        "creditos" => 3,
        "nota" => 18,
    ),
    $curso3 = array(
        "curso" => "fisica2",
        "creditos" => 4,
        "nota" => 20,
    ),
);
$semestre4 = array(
    $curso1 = array(
        "curso" => "matematica4",
        "creditos" => 5,
        "nota" => 16,
    ),
    $curso2 = array(
        "curso" => "redes2",
        "creditos" => 3,
        "nota" => 19,
    ),
    $curso3 = array(
        "curso" => "fisica3",
        "creditos" => 4,
        "nota" => 14,
    ),
);

$semestre5 = array(
    $curso1 = array(
        "curso" => "matematica5",
        "creditos" => 5,
        "nota" => 17,
    ),
    $curso2 = array(
        "curso" => "redes3",
        "creditos" => 3,
        "nota" => 14,
    ),
    $curso3 = array(
        "curso" => "fisica4",
        "creditos" => 4,
        "nota" => 17,
    ),
);


foreach ($semestre1 as $dato => $valor) {
    echo "<tr>";
    echo "<th> $dato </th>";
}
