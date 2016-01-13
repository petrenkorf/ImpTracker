<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class EndPointController extends Controller
{
    public function capture(Request $request) {
        return 'receiving request';
    }
}