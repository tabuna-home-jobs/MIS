<?php
namespace App\Facades;

use App\Models\Block as BlockModel;
use Illuminate\Support\Facades\Facade;

class Block extends Facade
{
    public static function make($slug = '', $view = '')
    {
        $block = BlockModel::where('slug', $slug)->with('items')->first();

        if (view()->exists($view) && $block) {
            echo view()->make($view, ['block' => $block]);
        }
    }
}
