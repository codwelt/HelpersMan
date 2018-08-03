<?php

namespace Codwelt\HelpersMan\laravel;

/**
 * Class HelpersManProvider
 * @author FuriosoJack <iam@furiosojack.com>
 */
class HelperManProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {

        //Registra helpers
        foreach (glob(realpath(__DIR__."/../functions/*.php")) as $fileName){
            require_once $fileName;
        }

    }

}