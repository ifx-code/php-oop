# PHP OOP Notes

- PHP does not support multiple inheritance. `Traits` are used to solve this and it cannot be instantiate.
- `Overriding` is extending a class and then create same method name to override parent method.
- `Final` prevent child classes from overriding a method & a `Final` declared class cannot be extended.
- `Abstract` classes cannot be instantiated, Their sole purpose is to provide common methods and properties (to provide functionality)
 for their child classes to use.
- `Polymorphism` is multiple classes using the same methods by implementing the same `interface` but have different purpose & functionalities.
- PHP Class can extend ONLY 1 `Abstract` class but implement multiple `interface`.
- We only defined methods names in `interface`
- `typehinting` is giving the type to a particular argument in a class method
