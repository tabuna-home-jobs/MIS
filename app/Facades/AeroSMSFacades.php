<?php
namespace App\Facades;

use App\Services\AeroSMS;
use Illuminate\Support\Facades\Facade;

class AeroSMSFacades extends Facade
{

    /**
     * Получить зарегистрированное имя компонента.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AeroSMS::class;
    }
}
