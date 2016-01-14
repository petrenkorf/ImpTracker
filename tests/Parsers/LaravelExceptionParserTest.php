<?php

namespace Test\Parser;

use Test\TestCase;

use App\Parsers\LaravelExceptionParser;
use \Symfony\Component\HttpKernel\Exception\HttpException;

class LaravelExceptionParserTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShouldExtractCriticalData()
    {
        $parser    = new LaravelExceptionParser();
        $exception = new HttpException(404); 



    }
}
