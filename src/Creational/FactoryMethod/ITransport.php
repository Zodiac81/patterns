<?php


namespace App\Creational\FactoryMethod;


interface ITransport
{
    public function deliver() :string;
    public function tonnage() :string;
}