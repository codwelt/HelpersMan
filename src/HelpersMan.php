<?php
namespace  Codwelt\HelpersMan;
/**
 * Class HelpersMan
 * @author Juan Diaz - FuriosoJack <iam@furiosojack.com>
 */
class HelpersMan
{
    /**
     * Genera un string aleatorio de con los caracteres de keyspace y de un tamaño indicado con el lenght
     * @param $length  Tamaño del string a generar
     * @param string $keyspace caracteres con los que se va a generar
     * @return string
     * @throws \Exception
     */
    public static function random_string($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }

    /**
     * Elimina caracteres especiales saltos de linea y cualquier cosa que no sea una letra o numero
     * @param $string En el que se va a buscar y reemplazar los caracteres
     * @param string $remplaceTo por lo que se va a reemplazar los caracteres
     * @param string $regex el patron de busqueda se va a seguir para los caracteres a reemplazar
     * @return string
     */
    public static function purificate_string($string, $remplaceTo = '' , $regex = '/[^A-Za-z0-9]/')
    {
        return preg_replace($regex,$remplaceTo,$string);
    }

}