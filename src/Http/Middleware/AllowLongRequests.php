<?php

namespace Mydnic\AllowLongRequests\Http\Middleware;

use Closure;

class AllowLongRequests
{
    public function handle($request, Closure $next)
    {
        set_time_limit(300);

        return $next($request);
    }
}
