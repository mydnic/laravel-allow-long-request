<?php

namespace Mydnic\AllowLongRequests\Test;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\Http\Middleware\VerifyCsrfToken;
use Mydnic\AllowLongRequests\Http\Middleware\AllowLongRequests;

class RouteMiddlewareTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        \Route::middleware('allow-long-requests')->any('/_test', function () {
            sleep(100);
            return 'OK';
        });
    }

    // /** @test */
    // public function it_allows_long_request_with_middleware()
    // {
    //     config()->set('allow-long-request.wait', 200);

    //     $this->get('/_test');
    // }

    /** @test */
    public function it_doesnt_allow_long_request_without_middleware()
    {
        config()->set('allow-long-requests.wait', 5);

        $this->get('/_test');
    }
}
