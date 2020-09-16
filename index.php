<?php

use App\Creational\FactoryMethod\PlanePost;
use App\Creational\FactoryMethod\ShipPost;
use App\Creational\FactoryMethod\Truck;
use App\Creational\FactoryMethod\TruckPost;

require "vendor/autoload.php";

$transportType = new PlanePost();
echo $transportType->getTransport() ."<br>";
echo $transportType->getWeight();
