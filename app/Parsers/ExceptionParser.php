<?php

namespace App\Parsers;

use Exception;

class ExceptionParser implements IExceptionParser
{
    protected $message;
    protected $file;
    protected $line;
    protected $stack;

    public function parse(Exception $e)
    {
        $this->message = $e->getMessage();
        $this->file    = $e->getFile();
        $this->line    = $e->getLine();
        $this->stack   = array_slice($e->getTrace(), 0, 5);
        $this->formatTrace();
    }

    private function formatTrace()
    {
        $tempArr = [];

        foreach ($this->stack as $index => $currentStep) {
            $curStep = [
                'file'     => ($index > 0) ? $currentStep['file'] : '', 
                'function' => $currentStep['function'], 
                'class'    => $currentStep['class'], 
            ];

            array_push($tempArr, $curStep);
        }

        $this->stack = $tempArr;
    }
}