<?php namespace App\Services;

// из-за конфликта перименовал
use App\Models\Sites as listsite;


class Sites {

    public function get()
    {
        return listsite::all();
    }

}
