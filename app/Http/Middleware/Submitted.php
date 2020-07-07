<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Submitted
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
        if (Auth::user()->submit == 0) {
            return $next($request);
        }
        return redirect('status')->with('error', 'Anda tidak boleh membuat perubahan setelah permohonan berjaya dihantar.');
    }
}
