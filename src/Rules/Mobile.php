<?php
/**
 * Created by PhpStorm.
 * User: guojianhang
 * Date: 2018/2/7
 * Time: 19:59
 */

namespace Waterloocode\LaravelValidationExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
/**
 * 规则 -- 更新日期 2017-03-30
 * 手机号码: 13[0-9], 14[5,7,9], 15[0, 1, 2, 3, 5, 6, 7, 8, 9], 17[0, 1, 6, 7, 8], 18[0-9]
 * 移动号段: 134,135,136,137,138,139,147,150,151,152,157,158,159,170,178,182,183,184,187,188
 * 联通号段: 130,131,132,145,155,156,170,171,175,176,185,186
 * 电信号段: 133,149,153,170,173,177,180,181,189
 *
 * [数据卡]: 14号段以前为上网卡专属号段，如中国联通的是145，中国移动的是147,中国电信的是149等等。
 * [虚拟运营商]: 170[1700/1701/1702(电信)、1703/1705/1706(移动)、1704/1707/1708/1709(联通)]、171（联通）
 * [卫星通信]: 1349
 */
class Mobile implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

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
        if (strlen($value) !== 11) {
            return false;
        }
        if (!is_numeric($value)) {
            return false;
        }
        // 中国移动
        $cmcc
            = '((13[4-9])|(147)|(15[0-2,7-9])|(17[8])|(18[2-4,7-8]))[0-9]{8}|(170[5])[0-9]{7}';
        //中国联通
        $uniform
            = '((13[0-2])|(145)|(15[5-6])|(17[156])|(18[5,6])|(16[6]))[0-9]{8}|(170[4,7-9])[0-9]{7}';
        //电信
        $telecom
            = '((133)|(149)|(153)|(17[3,7])|(18[0,1,9])|(19[9]))[0-9]{8}|(170[0-2])[0-9]{7}';

        $patterns = '/\A%s\z/D';//限定开头和结尾

        return preg_match(sprintf($patterns, $cmcc), $value)
            || preg_match(sprintf($patterns, $uniform), $value)
            || preg_match(sprintf($patterns, $telecom), $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '手机号格式不正确';
    }
}
