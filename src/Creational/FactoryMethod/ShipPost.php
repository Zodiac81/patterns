<?php


namespace App\Creational\FactoryMethod;

/**
 * Конкретные Создатели переопределяют фабричный метод для того, чтобы изменить
 * тип результирующего продукта.
 */

class ShipPost extends BaseLogistic
{

    function whichWay(): ITransport
    {
        return new Ship();
    }
}