<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckAdmin
{
    protected $auth;
    public function __construct(Guard $guard)
    {
        $this->auth = $guard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->group_id != 1){
            die('Ban khong co quyen truy cap');
        }

        return $next($request);
    }
}
