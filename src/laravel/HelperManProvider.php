<?php

namespace Codwelt\HelpersMan\laravel;
use Illuminate\Support\ServiceProvider;

/**
 * Class HelpersManProvider
 * @author FuriosoJack <iam@furiosojack.com>
 */
class HelperManProvider extends ServiceProvider
{
    public function boot()
    {
        //Registra helpers
        foreach (glob(realpath(__DIR__."/../")."/functions/*.php") as $fileName){
            require_once (realpath($fileName));
        }

    }

}