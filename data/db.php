<?php

require_once("../models/Product.php");
require_once("../models/Animal.php");

$product1 = new Product ("CroccantiniDeluxe", "€12", "Mangime");
var_dump($product1);

echo "<br>--------------------------<br>";

$animal1 = new Animal("Cane", 10);
var_dump($animal1);