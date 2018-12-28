<?php

namespace Core;

class ErrorHandler
{

    public static function interrupt(string $report) {
        header('Content-Type: text/plain');
        die($report);
    }

}