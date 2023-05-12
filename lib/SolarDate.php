<?php

namespace DarkCalendar\SolarDate;

use Facades\Facade;

/**
 * @method array|string date($format, string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'fa')
 * @method array|string strftime($format, string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'fa')
 * @method bool|int mktime(string|int $h = '', string|int $m = '', string|int $s = '', string|int $jm = '', string|int $jd = '', string|int $jy = '', string|int $none = '', $timezone = 'Asia/Tehran')
 * @method array getDate(string $timestamp = '', string|int $none = '', string $timezone = 'Asia/Tehran', string $tn = 'en')
 * @method bool checkDate($jm, $jd, $jy)
 * @method array|string tr_num($str, string $mod = 'en', string $mf = '٫')
 * @method mixed date_words($array, string $mod = '')
 * @method array|string gregorian_to_solar($gy, $gm, $gd, $mod = '')
 * @method array|string solar_to_gregorian($jy, $jm, $jd, $mod = '')
 */
class SolarDate extends Facade
{
    public static function setNameSpace(): string
    {
        return SolarDateService::class;
    }
}