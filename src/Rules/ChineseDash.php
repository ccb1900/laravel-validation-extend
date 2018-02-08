<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/8
 * Time: 19:33
 */

namespace Waterloocode\LaravelValidationExtend\Rules;


use Illuminate\Contracts\Validation\Rule;

/**
 * Class ChineseDash
 * 验证的字段可能具有中文字母、数字、破折号（ - ）以及下划线（ _ ）。
 * @package Waterloocode\LaravelValidationExtend\Rules
 */
class ChineseDash implements Rule
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
        $rule = '^[\x{4e00}-\x{9fa5}A-Za-z0-9_-]+$';
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
        return '汉字，字母、数字、破折号（ - ）以及下划线（ _ ）';
}}