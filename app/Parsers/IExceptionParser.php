<?php

namespace App\Parsers;

use Exception;

interface IExceptionParser
{
    public function parse(Exception $e);
}