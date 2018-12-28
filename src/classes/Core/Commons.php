<?php

namespace Core;

class Commons
{

    public static function file_build_path(string ...$segments) {
        return join(DIRECTORY_SEPARATOR, $segments);
    }

    public static function url_path() {
        $url_path = $_SERVER['REDIRECT_URL'];
        $url_path = preg_replace('/[\/]{2,}/', '/', $url_path);
        return (!empty($url_path) ? $url_path : '/');
    }

}