<?php

namespace Mydnic\AllowLongRequests\Test;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Mydnic\AllowLongRequests\AllowLongRequestsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [AllowLongRequestsServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $config = $app->get('config');
        $config->set('logging.default', 'errorlog');
    }
}
