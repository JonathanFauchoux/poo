<?php 
ini_set('display_errors', 1);
require_once ('car.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
$car= new Voiture ('BE1ncs065', 2006, 120000, "A3", "Audi","noir", 2.5, "12ans");

echo $car->checkMarque("Audi");
echo $car->checkMarque("Opel");
echo $car->checkPoids(2.5);
echo $car->checkPoids(4);
echo $car->checkPays("BE1ncs065");
echo $car->checkPays("DE258poi7");
echo $car->checkKilometre(120000);
echo $car->checkKilometre(220000);
echo $car->checkAge(2006);
echo $car->rouler(100000);


?>


</body>
</html>