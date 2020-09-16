<?php


namespace App\Creational\FactoryMethod;


class Truck implements ITransport
{

    public function deliver() :string
    {
        return 'Deliver by truck';
    }

    public function tonnage() :string
    {
        return 'Truck weight is 2000 kg';
    }
}