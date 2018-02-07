<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 19:59
 */

namespace Waterloocode\LaravelValidationExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
class Phone implements Rule
{
    public function __construct()
    {
        
    }

    public function passes($attribute, $value)
    {
        $rule = '\d{3}-\d{8}|\d{4}-\d{7}';
        return preg_match(sprintf('/%s/', $rule), $value);
    }

    public function message()
    {
        return '电话格式不正确';
    }
}