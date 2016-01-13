<?php

namespace App\Parsers;

use App\Parsers\LaravelExceptionParser;
use App\Parsers\MagentoExceptionParser;

class ParserFactory
{
    static public function make($parserName)
    {
        switch($parserName)
        {
            case 'laravel':
                return new LaravelExceptionParser();
            break;

            case 'magento' :
                return new MagentoExceptionParser();
            break;
        }
    }
}