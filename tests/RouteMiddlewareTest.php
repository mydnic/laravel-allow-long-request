<?php

namespace Mydnic\AllowLongRequests\Test;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\Http\Middleware\VerifyCsrfToken;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Mydnic\AllowLongRequests\Http\Middleware\AllowLongRequests;

class RouteMiddlewareTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        \Route::middleware(AllowLongRequests::class)->any('/_test', function () {
            return ini_get('max_execution_time');
        });
    }

    /** @test */
    public function it_updates_the_wait_time_from_config()
    {
        config()->set('allow-long-requests.wait', 5);

        $response = $this->get('/_test');
        $this->assertEquals($response->original, 5);
    }

    /** @test */
    public function it_uses_default_value_from_config()
    {
        $response = $this->get('/_test');
        $this->assertEquals($response->original, 300);
    }
}
