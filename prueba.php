<?php
$nombre = "Juan";
$precio = 8000;

if ($precio > 5000) echo "El producto es caro.";

$servicios = ["lavado", "pulido", "encerado"];
foreach ($servicios as $s) { echo "<li>$s</li>";
}