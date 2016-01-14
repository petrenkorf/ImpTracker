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
            case 'Laravel':
                return new LaravelExceptionParser();
            break;

            case 'Magento' :
                return new MagentoExceptionParser();
            break;
        }
    }
}