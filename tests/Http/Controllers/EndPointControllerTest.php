<?php

namespace Test\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Test\TestCase;

class EndPointControllerTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * Verifica se a rota da página principal do painel responde corretamente
     *
     * @return void
     */
    public function testEndPointRouteExists()
    {
        $request  = $this->call('POST', '/endpoint');
        
        $expected = 200;
        $result   = $request->status();
        
        $this->assertEquals($expected, $result);
    }

    public function testShouldValidateExceptionPost()
    {
        $data = [
            'project_token' => md5('test'),
            'stack'         => array(),
            'line'          => 1,
            'file'          => 'test.php',
            'message'       => 'message test',
        ];

        $response = $this->call('POST','/endpoint',$data);
        $status   = $response->status();
        $expectedStatus = 201;

        $this->assertEquals($expectedStatus, $status);

    }

    public function testShouldReturnStatus401WhenReceiveWrongToken()
    {

    }
}
