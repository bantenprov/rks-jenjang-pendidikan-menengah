<?php namespace Bantenprov\RKSJenPenMgh\Http\Middleware;

use Closure;

/**
 * The RKSJenPenMghMiddleware class.
 *
 * @package Bantenprov\RKSJenPenMgh
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenMghMiddleware
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
        return $next($request);
    }
}
