<?php


namespace App\Creational\FactoryMethod;


class Ship implements ITransport
{

    public function deliver() :string
    {
        return 'Deliver by ship';
    }

    public function tonnage() :string
    {
        return 'Ship weight is 45000 kg';
    }
}