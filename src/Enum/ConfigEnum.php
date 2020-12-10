<?php

namespace App\Enum;


class ConfigEnum
{
    public static function siteUrl($suffix = '') {
        return 'http://' . $_SERVER['HTTP_HOST'] . $suffix;
    }
}