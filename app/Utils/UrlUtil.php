<?php


namespace App\Utils;


class UrlUtil
{

    public static function getCurrentUrl() {
        $protocol = "";
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = "https";
        } else {
            $protocol = "http";
        }
        $protocol .= "://";

        return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    public static function isAnyParam($string) {
        return preg_match_all('/(\?.+)/', $string);
    }

    public static function isAnyParamInCurrentUrl() {
        return self::isAnyParam(self::getCurrentUrl());
    }

    public static function isPageSetInParam() {
        return preg_match_all('/(page\=)([^\&]+)/', self::getCurrentUrl());
    }

    public static function replacePageInUrl(int $pageNum) {
        return preg_replace('/(page\=)([^\&]+)/', "page=$pageNum", self::getCurrentUrl());
    }

    public static function replacePageAndGetUrl(int $pageNum) {
        return self::replacePageInUrl($pageNum);
    }

}
