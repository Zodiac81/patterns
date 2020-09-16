<?php


namespace App\Creational\FactoryMethod;


class Plane implements ITransport
{

    public function deliver(): string
    {
        return "Deliver by plane";
    }

    public function tonnage(): string
    {
        return "Plane weight is 10000 kg";
    }
}