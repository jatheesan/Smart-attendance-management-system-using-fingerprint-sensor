<?php

namespace App\Http\Middleware;
use App\Lecturer as Assistant;
use Closure;

class IsAssistantLecturers
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
        if(Assistant::where('position', 'assistentlecturer')->count()){
            return $next($request);
        }
    }
}
