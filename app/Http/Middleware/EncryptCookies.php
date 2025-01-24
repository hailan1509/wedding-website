<?php

namespace App\Http\Middleware;
use App\Models\ActivityLog;
use Closure;
use Illuminate\Http\Request;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
class EncryptCookies extends Middleware
{


    public function handle($request, Closure $next, ...$guards)
    {


        config(['ckfinder.authentication' => function() {
            //xử lý  auth ở đây
            return true;
        }]);
        return $next($request);


    }

    public function terminate( $request, $response) {
    }





}
