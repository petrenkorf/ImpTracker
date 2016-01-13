<?php

namespace Test\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Test\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLoginFormRouteExists()
    {
        $request  = $this->call('GET', '/auth/login');
        
        $expected = 200;
        $result   = $request->status();

        $this->assertEquals($expected, $result);
    }
}
