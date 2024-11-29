<?php

namespace App\Http\Middleware;

use App\Managers\QueryStringManager;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetQueryString
{

    public function handle(Request $request, Closure $next): Response
    {
        app(QueryStringManager::class)->setQueryString($request->get('query') ?? []);
        
        return $next($request);
    }
}
