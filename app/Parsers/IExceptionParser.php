<?php

namespace App\Parsers;

interface IExceptionParser
{
    public function parse(Exception $e);
}