<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/8
 * Time: 19:21
 */

namespace Waterloocode\LaravelValidationExtend\Rules;


use Illuminate\Contracts\Validation\Rule;

/**
 * Class Chinese
 * 中文
 * @package Waterloocode\LaravelValidationExtend\Rules
 */
class Chinese implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // TODO: Implement passes() method.
        $rule = '^[\x{4e00}-\x{9fa5}]+$';
        return preg_match(sprintf('/%s/u', $rule), $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // TODO: Implement message() method.
        return '请填写汉字';
}}