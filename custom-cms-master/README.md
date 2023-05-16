# PHP OOP Content-Management System

**Table of Contents**

* [Installation](#installation)
  * [Create Autoloader](#create-autoloader)
  * [Setup Document Root](#setup-document-root)
  * [Setup Database](#setup-database)
  * [Zugangsdaten für User](#zugangsdaten-für-user)
* [Explanation](#explanation)
  * [Class](#class)
  * [Abstract (Keyword)](#abstract-keyword)
  * [Static (Keyword)](#static-keyword)
  * [Final (Keyword)](#final-keyword)

## Installation

### Create Autoloader

*Requires composer.*

```shell
$ composer update
```


### Setup Document Root
`/public`

### Setup Database

Create a new database with the help of phpmyadmin and import all tables stored in the forum.sql 

Edit the **Database.php** and fill in your database credentials.

### Zugangsdaten für user
till.uebelacker@gmail.com PW: Regenbogen
august.modersohn@fantasymail.com PW: Bolognese
ann.esswein@mail.com PW: Kaffeetasse

## Explanation

### Class

Basic class definitions begin with the keyword **class**, followed by a class name, followed by a pair of curly braces 
which enclose the definitions of the properties and methods belonging to the class.

A class may contain its own **constants**, **variables** (called *properties*), and **functions** (called *methods*).

The pseudo-variable `$this` is available when a method is called from within an object context. `$this` is the value of the calling object.

Read the full documentation on [php.net](https://www.php.net/manual/en/language.oop5.basic.php).

```php
class Example {
    
    public function example() : void {
        // just an example
    }
    
}
```

### Abstract (Keyword)

PHP has **abstract** classes and methods. 

Classes defined as **abstract** cannot be instantiated, and any class that contains 
at least one abstract method must also be abstract. 

Methods defined as **abstract** simply declare the method's signature; they cannot define the implementation.

When inheriting from an **abstract** class, all methods marked **abstract** in the parent's class declaration must be defined 
by the child class, and follow the usual inheritance and signature compatibility rules.

Read the full documentation on [php.net](https://www.php.net/manual/en/language.oop5.abstract.php).

```php
abstract class Example {
    
    abstract public function example() : void;
    
}
```

### Static (Keyword)

Declaring class properties or methods as **static** makes them accessible without needing an instantiation of the class. 
These can also be accessed statically within an instantiated class object.

Because static methods are callable without an instance of the object created, the pseudo-variable `$this` is not available 
inside methods declared as static.

**Static** properties are accessed using the Scope Resolution Operator `::` and cannot be accessed through the object operator `->`.

It's possible to reference the class using a variable. The variable's value cannot be a keyword (e.g. `self`, `parent` and `static`).

Read the full documentation on [php.net](https://www.php.net/manual/en/language.oop5.static.php).

```php
class Example {

    public static function example() : void {
        // just an example
    }

}
```

### Final (Keyword)

The **final** keyword prevents child classes from overriding a method or constant by prefixing the definition with **final**. 
If the class itself is being defined **final** then it cannot be extended.

Read the full documentation on [php.net](https://www.php.net/manual/en/language.oop5.final.php).

```php
final class Example {
    
    final public function example() : void {
        // just an example
    }
    
}
```