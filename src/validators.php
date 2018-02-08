<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 20:41
 */
$registry = [
    [
        'name'=>'mobile',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\Mobile()
    ],
    [
        'name'=>'postcode',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\PostCode()
    ],
    [
        'name'=>'phone',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\Phone()
    ],
    [
        'name'=>'cn',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\Chinese()
    ],
    [
        'name'=>'cn_dash',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\ChineseDash()
    ],
    [
        'name'=>'cn_num',
        'obj'=>new \Waterloocode\LaravelValidationExtend\Rules\ChineseNum()
    ],
];

foreach ($registry as $item)
{
    $rules = $item['obj'];
    \Validator::replacer($item['name'], function ($message, $attribute, $rule, $parameters) use ($rules) {
        return $rules->message();
    });

    \Validator::extend($item['name'],function ($attribute, $value, $parameters, $validator) use ($rules){
        return $rules->passes($attribute, $value);
    });
}



