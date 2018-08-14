# HelpersMan
Scripts, metodos  y objectos de ayuda para programadores de php puro y de laravel.

# Caracteristicas

## Metodos
- helperman_random_string($length, $keyspace)   
  
   Genera un string aleatorio de con los caracteres de keyspace y de un tamaño indicado con el lenght
    - $length : Tamaño del string a generar 
    - $keyspace : Caracteres con los que se va a generar por defecto es `0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ` si no se le especifica
- helperman_purificate_string($string, $remplaceTo, $regex)

    Elimina caracteres especiales saltos de linea y cualquier cosa que no sea una letra o numero
    - $string : En el que se va a buscar y reemplazar los caracteres
    - $remplaceTo : por lo que se va a reemplazar los caracteres. Por defecto es, nada, si no se le especifica
    - $regex : El patron de busqueda se va a seguir para los caracteres a reemplazar. Por defecto es `/[^A-Za-z0-9]/` si no se le especifica.

## Instalacion

### Laravel >= 5.6

En la consola dentro del proyecto
```Bash
composer require codwelt/helpersman
```
### PHP

Para la instalacion en un entorno de php puro es necesario taner en el equipo el composer

dentro del proyecto usar en la consola 

```Bash
composer require codwelt/helpersman
```

luego en el archivo en el que va a usar las funciones o metodos debe incluir lo siguiente que se va usar lo que necesite del paquete añade lo siguiente para 

```php
<?php
require_once ('vendor/codwelt/HelpersMan/src/functions/basic.php');

/**
 * Codigo php  
 */
```
Ya con es tiene todos los metodo que tiene disponibles el paruete, tan solo llamandolos

```php
<?php
require_once ('vendor/codwelt/HelpersMan/src/functions/basic.php');

$ramdom = helperman_random_string(10);
```