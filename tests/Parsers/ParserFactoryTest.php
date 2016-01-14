<?php

namespace Test\Parser;

use Test\TestCase;

use App\Parsers\MagentoExceptionParser;
use App\Parsers\LaravelExceptionParser;
use App\Parsers\ParserFactory;

class ParserFactoryTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFactoryShouldReturnParsers()
    {
        $factory = new ParserFactory();

        $expected = "App\Parsers\MagentoExceptionParser";
        $result = $factory::make('Magento');

        $this->assertInstanceOf($expected, $result);

        $expected = "App\Parsers\LaravelExceptionParser";
        $result = $factory::make('Laravel');

        $this->assertInstanceOf($expected, $result);
    }
}
