<?php

namespace App\Http\Middleware;

use App\Lecturer as Lect;
use Closure;

class IsLecturers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Lect::where('position', 'lecturer')->count()){
            return $next($request);
        }

       
        abort(403);

    }
}
