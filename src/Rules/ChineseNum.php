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
 * Class ChinesNum
 * 中文字母，数字
 * @package Waterloocode\LaravelValidationExtend\Rules
 */
class ChineseNum implements Rule
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
        $rule = '^[\x{4e00}-\x{9fa5}A-Za-z0-9]+$';
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
        return '允许汉字，字母，数字';
}}