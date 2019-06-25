<?php
namespace App\Http\Middleware;
use Closure;
use App\User;
use Auth;
class isAuth
{
    /**
     * Обработка входящего запроса.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check())
        {
            return $next($request);
        } else
        return redirect('/login');
    }
}