<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/wuqing-portal-config/src/SmartyConfig/Wc',
            S_ROOT.'vendor/qixinyun/wuqing-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/wuqing-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
