<?php

namespace Codwelt\HelpersManPHP\laravel;

/**
 * Class HelpersManProvider
 * @author FuriosoJack <iam@furiosojack.com>
 */
class HelperManProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {

        //Registra helpers
        foreach (glob(realpath(__DIR_."/../functions/*.php")) as $fileName){
            require_once $fileName;
        }

    }

}