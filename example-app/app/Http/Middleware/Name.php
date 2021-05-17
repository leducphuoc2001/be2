<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class name
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $name = $request->get('name');
        //is null
        if (empty($name)) {
            $name = '';
        }

        $request->merge(['name' => $name]);

        return $next($request);
    }
}
