# waterloocode/laravel-validation-extend
### 描述
laravel验证扩展，添加手机，电话，邮编。
### php包参考
https://github.com/php-pds/skeleton_research
### 使用
和laravel自带的验证条件使用方式一样。
```$xslt
$validator = Validator::make([
    'mobile'=>'15601948562',
    'postcode'=>'466724',
    'phone'=>'021-29313211',
],[
    'mobile'=>['mobile'],
    'postcode'=>['postcode'],
    'phone'=>['phone'],
]);
```
- 中文
- 中文，字母，下划线，中杠线,数字
- 中文，字母，数字
- 手机号
- 电话
- 邮编
