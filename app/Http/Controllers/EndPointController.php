<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

class EndPointController extends Controller
{
    public function capture(Request $request) {
        return 'receiving request';
    }
}