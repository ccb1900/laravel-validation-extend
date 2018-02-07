<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 20:41
 */
\Validator::extend('mobile',function ($attribute, $value, $parameters, $validator){
    $mobile = new \Waterloocode\LaravelValidationExtend\Rules\Mobile();
    return $mobile->passes($attribute, $value);
});
\Validator::extend('phone',function ($attribute, $value, $parameters, $validator){
    $phone = new \Waterloocode\LaravelValidationExtend\Rules\Phone();
    return $phone->passes($attribute, $value);
});
\Validator::extend('postcode',function ($attribute, $value, $parameters, $validator){
    $postcode = new \Waterloocode\LaravelValidationExtend\Rules\PostCode();
    return $postcode->passes($attribute, $value);
},'');

\Validator::replacer('phone', function ($message, $attribute, $rule, $parameters) {
    $phone = new \Waterloocode\LaravelValidationExtend\Rules\Phone();

    return $phone->message();
});
\Validator::replacer('postcode', function ($message, $attribute, $rule, $parameters) {
    $postcode = new \Waterloocode\LaravelValidationExtend\Rules\PostCode();

    return $postcode->message();
});
\Validator::replacer('mobile', function ($message, $attribute, $rule, $parameters) {
    $mobile = new \Waterloocode\LaravelValidationExtend\Rules\Mobile();
    return $mobile->message();
});