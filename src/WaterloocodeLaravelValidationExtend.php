<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 19:56
 */

namespace Waterloocode\LaravelValidationExtend;


use Illuminate\Support\ServiceProvider;

class WaterloocodeLaravelValidationExtend extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__.'/validators.php';
    }
}