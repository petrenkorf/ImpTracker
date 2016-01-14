<?php

namespace Test\Parsers;

use Test\TestCase;

use App\Parsers\ExceptionParser;
use Symfony\Component\HttpKernel\Exception\HttpException;

use ReflectionObject;

class ExceptionParserTest extends TestCase
{
    public function testShouldExtractDataToPost()
    {
        $parser    = new ExceptionParser();
        
        $eMessage  = "Exception Test";
        $exception = new HttpException(404, $eMessage);
        $eTrace    = $exception->getTrace();
        $eLine     = $exception->getLine();
        $eFile     = $exception->getFile();

        $parser->parse($exception);

        $reflection = new ReflectionObject($parser);

        $stack = $reflection->getProperty('stack');
        $stack->setAccessible(true);

        $file = $reflection->getProperty('file');
        $file->setAccessible(true);

        $line = $reflection->getProperty('line');
        $line->setAccessible(true);

        $message = $reflection->getProperty('message');
        $message->setAccessible(true);


        $this->assertInternalType('array', $stack->getValue($parser));
        $this->assertEquals($eMessage, $message->getValue($parser));
        $this->assertEquals($eFile,    $file->getValue($parser));
        $this->assertEquals($eLine,    $line->getValue($parser));
    }
}