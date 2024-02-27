<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQueryParam
{
    public function handle($request, Closure $next, $paramName)
    {
        if ($request->has($paramName)) {
            return $next($request);
        }

        return response()->json(['error' => 'Query parameter is missing.'], 400);
    }
}
