<h1>Livres de Stephen King</h1>

<?php 

spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});

$auteur= new Auteur("Stephen","King <br>");

$livre1= new Livre("CA",1986,1138,20,$auteur);
$livre2= new Livre("Simetierre",1983,374,15,$auteur);
$livre3= new Livre("Le Fleau", 1978, 823 ,14,$auteur);
$livre4= new Livre("Shinning",1977,447 ,16,$auteur);



($auteur);

echo $auteur -> affficherBibliographie();







?>