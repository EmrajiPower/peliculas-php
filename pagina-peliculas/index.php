<?php
require 'clases.php';

$pel1 = new Peliculas("123","Superman","Disponible","Acción","DC","Estreno");
$pel2 = new Peliculas("124","Capitan América","Disponible","Acción","Marvel","Estreno");
$pel3 = new Peliculas("125","Capitán Marvel","Disponible","Acción","Marvel","General");

$videotienda = [$pel1,$pel2,$pel3];
echo "<ol>";
for ($i=0; $i<count($videotienda); $i++) {
  echo "<li>".$videotienda[$i]->nombre."</li>"; //si dejoe videotienda[$i] Imprime todo.
}
echo "</ol>";
echo "<br>";
?>
