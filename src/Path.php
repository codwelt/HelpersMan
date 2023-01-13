<?php
namespace Codwelt\HelpersMan;


class Path
{
   /**
     * Remueve los doble slash
     * @param string $data
     * @return string|string[]|null
     */
    public static function removeDoubleSlash($data)
    {
        return \preg_replace('/([^:])(\/{2,})/', '$1/', $data);
    }
}