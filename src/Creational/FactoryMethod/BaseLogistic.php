<?php


namespace App\Creational\FactoryMethod;

/**
 * Класс BaseLogistic объявляет фабричный метод (whichWay()), который должен возвращать объект
 * класса ITransport (совпадал с общим интерфейсом продуктов). Подклассы BaseLogistic обычно предоставляют реализацию этого
 * метода.
 */
abstract class BaseLogistic
{
    /**
     * Обратите внимание, что BaseLogistic может также обеспечить реализацию
     * фабричного метода по умолчанию.
     */
    abstract function whichWay():ITransport; /** Сюда попадет объект конкретного класса */

    public function getTransport() :string
    {
        $obj = $this->whichWay(); /** обращаемся к объекту */
        return $obj->deliver();
    }

    public function getWeight() :string
    {
        $obj =$this->whichWay();
        return $obj->tonnage();
    }

}