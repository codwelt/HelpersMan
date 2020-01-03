# HelpersMan
Scripts, metodos  y objectos de ayuda para programadores de php.

# Caracteristicas

## Metodos
- random_string($length, $keyspace)   
  
   Genera un string aleatorio de con los caracteres de keyspace y de un tamaño indicado con el lenght
    - $length : Tamaño del string a generar 
    - $keyspace : Caracteres con los que se va a generar por defecto es `0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ` si no se le especifica
- purificate_string($string, $remplaceTo, $regex)

    Elimina caracteres especiales saltos de linea y cualquier cosa que no sea una letra o numero
    - $string : En el que se va a buscar y reemplazar los caracteres
    - $remplaceTo : por lo que se va a reemplazar los caracteres. Por defecto es, nada, si no se le especifica
    - $regex : El patron de busqueda se va a seguir para los caracteres a reemplazar. Por defecto es `/[^A-Za-z0-9]/` si no se le especifica.
- count_words_repeated($text, $deleteAcent, $distinction_lowercase, $words_excluyed)
    Hace un conteo de todas las palabras repetidas y no repetidas que estan en el texto
     - $text: Es el texto del cual se va a contar las palabras
     - $deleteAcent: por defecto es `true` es una bandera para saber si se eliminan los acentos de las palabras
     - $distinction_lowercase: por defecto es `false` es una bandera para saber si se tiene en cuenta la distincion de las mayusculas y minusculas cuando se cuentan las palabras
     - $words_excluyed: por defecto es un array vacio. Es un array con la lista de palabras que no se desean contar
- delete_acents($string)

    Se encarga de eliminar los acentos del string ingresado
     ####Ejemplo 
     ```php
         <?php
         use Codwelt\HelpersMan\HelpersMan;
         
         $text = "este es un un texto de prueba";
         $countWords = HelpersMan::count_words_repeated($text);
         var_dump($countWords);
     ```
     Se obtendra como resultado algo como esto
     ```php
     array(6) {
       ["un"]=>
       int(2)
       ["este"]=>
       int(1)
       ["es"]=>
       int(1)
       ["texto"]=>
       int(1)
       ["de"]=>
       int(1)
       ["prueba"]=>
       int(1)
     }
   ```      
     
    

## Instalacion

### PHP

Para la instalacion en un entorno de php puro es necesario taner en el equipo el composer

dentro del proyecto usar en la consola 

```Bash
composer require codwelt/helpersman
```


Ya con eso tiene disponibles el paquete, tan solo llamandolos

```php
<?php
use Codwelt\HelpersMan\HelpersMan;

$ramdom = HelpersMan::random_string(10);
```