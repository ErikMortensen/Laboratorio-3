<?php
require_once "Rectangulo.php";

$rectangulo = new Rectangulo(7,10);
$rectangulo->SetColor("red");

echo $rectangulo->ToString();
//echo "<p style='color:{$rectangulo->GetColor()}'>{$rectangulo->Dibujar()}</p>";

?>