<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Issue;

class EndPointController extends Controller
{
    public function capture(Request $request) {
        $this->validate($request, Issue::$validationRUles);

        return new Response(NULL, 201);
    }
}