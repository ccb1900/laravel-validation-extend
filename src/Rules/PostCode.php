<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 19:59
 */

namespace Waterloocode\LaravelValidationExtend\Rules;
use Illuminate\Contracts\Validation\Rule;

class PostCode implements Rule
{
    public function __construct()
    {

    }

    public function passes($attribute, $value)
    {
        $rule = '[1-9]\d{5}(?!\d)';
        return preg_match(sprintf('/%s/', $rule), $value);
    }

    public function message()
    {
        return '邮编格式不正确';
    }
}