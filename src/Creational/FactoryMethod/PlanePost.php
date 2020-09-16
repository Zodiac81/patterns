<?php


namespace App\Creational\FactoryMethod;


class PlanePost extends BaseLogistic
{

    /**
     * @inheritDoc
     */
    function whichWay(): ITransport
    {
        return new Plane();
    }
}