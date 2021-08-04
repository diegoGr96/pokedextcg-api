<?php

namespace App\Http\Middleware;

use App\Http\Controllers\IpActivityHistoryController;
use Closure;
use Stevebauman\Location\Facades\Location;

class RegisterIpActivity
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
        if ($position = Location::get()) {
            $ipController = new IpActivityHistoryController();
            $ipController->store($request, $position);
        } else {
            // Failed retrieving position.
            // echo 'No he podido obtener la IP';
        }
        return $next($request);
    }
}
