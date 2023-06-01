<?php

use DarkCalendar\SolarDate\SolarDate;

// Fast Version 2 9

if (!function_exists('gregorian')) {
    /**
     * @param string $format
     * @param string|int $timestamp
     * @return array|string
     */
    function gregorian(string $format = '', string|int $timestamp = ''): array|string
    {
        if ($format == '') {
            return explode('-', date('Y-m-d', $timestamp));
        }
        return date($format, $timestamp);
    }
}

if (! function_exists('s_date')){
    /**
     * @param $format
     * @param string|int $timestamp
     * @param string|int $none
     * @param string $time_zone
     * @param string $tr_num
     * @return array|string
     */
    function s_date($format, string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'fa'): array|string
    {
        return SolarDate::date($format, $timestamp, $none, $time_zone, $tr_num);
    }
}

if (! function_exists('s_strftime')){
    /**
     * @param $format
     * @param string|int $timestamp
     * @param string|int $none
     * @param string $time_zone
     * @param string $tr_num
     * @return array|string
     */
    function s_strftime($format, string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'fa'): array|string
    {
        return SolarDate::strftime($format, $timestamp, $none, $time_zone, $tr_num);
    }
}

if (! function_exists('s_mktime')){
    /**
     * @param string|int $h
     * @param string|int $m
     * @param string|int $s
     * @param string|int $jm
     * @param string|int $jd
     * @param string|int $jy
     * @param string|int $none
     * @param string $timezone
     * @return bool|int
     */
    function s_mktime(string|int $h = '', string|int $m = '', string|int $s = '', string|int $jm = '', string|int $jd = '', string|int $jy = '', string|int $none = '', string $timezone = 'Asia/Tehran'): bool|int
    {
        return SolarDate::mktime($h, $m, $s, $jm, $jd, $jy, $none, $timezone);
    }
}

if (! function_exists('s_getDate')){
    /**
     * @param string $timestamp
     * @param string|int $none
     * @param string $timezone
     * @param string $tn
     * @return array
     */
    function s_getDate(string $timestamp = '', string|int $none = '', string $timezone = 'Asia/Tehran', string $tn = 'en'): array {
        return SolarDate::getDate($timestamp, $none, $timezone, $tn);
    }
}

if (! function_exists('s_checkDate')){
    /**
     * @param $jm
     * @param $jd
     * @param $jy
     * @return bool
     */
    function s_checkDate($jm, $jd, $jy): bool
    {
        return SolarDate::checkDate($jm, $jd, $jy);
    }
}

if (! function_exists('s_tr_num')){
    /**
     * @param $str
     * @param string $mod
     * @param string $mf
     * @return array|string
     */
    function s_tr_num($str, string $mod = 'en', string $mf = '٫'): array|string
    {
        return SolarDate::tr_num($str, $mod, $mf);
    }
}

if (! function_exists('s_date_words')){
    /**
     * @param $array
     * @param string $mod
     * @return mixed
     */
    function s_date_words($array, string $mod = ''): mixed
    {
        return SolarDate::date_words($array, $mod);
    }
}
if (! function_exists('gregorian_to_solar')){
    /**
     * @param $gy
     * @param $gm
     * @param $gd
     * @param string $mod
     * @return array|string
     */
    function gregorian_to_solar($gy, $gm, $gd, string $mod = ''): array|string
    {
        return SolarDate::gregorian_to_solar($gy, $gm, $gd, $mod);
    }
}
if (! function_exists('g_t_s')){
    /**
     * @param $gy
     * @param $gm
     * @param $gd
     * @param string $mod
     * @return array|string
     */
    function g_t_s($gy, $gm, $gd, string $mod = ''): array|string
    {
        return SolarDate::gregorian_to_solar($gy, $gm, $gd, $mod);
    }
}

if (! function_exists('solar_to_gregorian')){
    /**
     * @param $jy
     * @param $jm
     * @param $jd
     * @param string $mod
     * @return array|string
     */
    function solar_to_gregorian($jy, $jm, $jd, string $mod = ''): array|string
    {
        return SolarDate::solar_to_gregorian($jy, $jm, $jd, $mod);
    }
}
if (! function_exists('s_t_g')){
    /**
     * @param $jy
     * @param $jm
     * @param $jd
     * @param string $mod
     * @return array|string
     */
    function s_t_g($jy, $jm, $jd, string $mod = ''): array|string
    {
        return SolarDate::solar_to_gregorian($jy, $jm, $jd, $mod);
    }
}

if (!function_exists('solar')) {
    /**
     * @param string $format
     * @param string|int $timestamp
     * @param string|int $none
     * @param string $time_zone
     * @param string $tr_num
     * @return array|string
     */
    function solar(string $format = '', string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'en'): array|string
    {
        if ($format == '') {
            return explode('-', SolarDate::date('Y-m-d', $timestamp, $none, $time_zone, $tr_num));
        }
        return SolarDate::date($format, $timestamp, $none, $time_zone, $tr_num);
    }
}

if (!function_exists('solar_to_gregorian')) {
    /**
     * @param $sy
     * @param $sm
     * @param $sd
     * @param string $mod
     * @return array|string
     */
    function solar_to_gregorian($sy, $sm, $sd, string $mod = ''): array|string
    {
        return SolarDate::solar_to_gregorian($sy, $sm, $sd, $mod);
    }
}

if (!function_exists('gregorian_to_solar')) {
    /**
     * @param $gy
     * @param $gm
     * @param $gd
     * @param string $mod
     * @return array|string
     */
    function gregorian_to_solar($gy, $gm, $gd, string $mod = ''): array|string
    {
        return SolarDate::gregorian_to_solar($gy, $gm, $gd, $mod);
    }
}
