<?php
namespace Codwelt\HelpersMan;

class Time {

    /**
     * Se encarga de calcular el numero de años que han pasado desde una fecha especificada
     * el valor que retornar es un array en posicion 0 sera la edad y el index 1 es el año  
     *      
     * 
     * 
     *
     * @param string | int $añoEdad es el año o el numero del años que se deben calcular
     * @return array 
     */
    public static function years_with_date($añoEdad)
    {
        $año =  $añoEdad;
        $edad = null;
        if(!is_null($año) && is_numeric($año)){

            $hoy = new \DateTime();
            $año = (int)$año;
            if($año > 1000){
                //es por que viene el año
                $fecha = "01-01-".$año;
                $cumpleaños = new \DateTime($fecha);
                $edad = $hoy->diff($cumpleaños)->y;
            }else{
                //al venir el año inferior a mil se aume que es el numero de ñoas
                $edad = $año;
                $año = $hoy->modify("- {$año} year")->format("Y");
            }
        }

        return [
            $edad,
           $año
        ];
    }
}