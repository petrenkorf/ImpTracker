<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\IssueInterface;

class EndPointController extends Controller
{
    public function capture(
        Request $request, 
        IssueInterface $issue
    ) {
        $this->validate($request, $issue->getValidationRUles());

        $issue->fill($request->all());
        return new Response(NULL, 201);
    }
}