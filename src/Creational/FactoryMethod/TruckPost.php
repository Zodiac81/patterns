<?php


namespace App\Creational\FactoryMethod;


class TruckPost extends BaseLogistic
{
    public function whichWay():ITransport
    {
        return new Truck();
    }
}