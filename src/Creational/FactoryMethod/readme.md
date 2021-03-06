# Фабричный метод

Фабричный метод — это порождающий паттерн проектирования, 
который определяет общий интерфейс для создания объектов в суперклассе,
 позволяя подклассам изменять тип создаваемых объектов.
 
Паттерн Фабричный метод предлагает создавать объекты не напрямую, 
используя оператор new, а через вызов особого фабричного метода. 

Фабричный метод можно определить по создающим методам, 
которые возвращают объекты продуктов через абстрактные типы или интерфейсы. 
Это позволяет переопределять типы создаваемых продуктов в подклассах.

Способ делигирования логики создания объектов дочерним классам