</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	$alumnos = [
    ["nombre" => "Carlos", "calificacion" => 7],
    ["nombre" => "Ana", "calificacion" => 9],
    ["nombre" => "Luis", "calificacion" => 6],
    ["nombre" => "Maria", "calificacion" => 8],
    ["nombre" => "Pedro", "calificacion" => 5]
];

foreach ($alumnos as $alumno) {
    echo "La calificación de " . $alumno['nombre'] . " es " . $alumno['calificacion'] . "<br>";
}

usort($alumnos, function ($a, $b) {
    return $a['calificacion'] <=> $b['calificacion'];
});

echo "<br>Alumnos ordenados por calificación:<br>";

foreach ($alumnos as $alumno) {
    echo "La calificación de " . $alumno['nombre'] . " es " . $alumno['calificacion'] . "<br>";
}
?>

</body>
</html>