<?php

namespace Test\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Test\TestCase;

class PanelControllerTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * Verifica se a rota da página principal do painel responde corretamente
     *
     * @return void
     */
    public function testHomePanelRouteExists()
    {
        $request  = $this->call('GET', '/');
        
        $expected = 200;
        $result   = $request->status();
        
        $this->assertEquals($expected, $result);
    }
}
