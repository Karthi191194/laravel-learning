<?php
/* learning3 */
namespace App\Http\Middleware;

use Closure;
use Auth; //learning3
class test
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
        //echo "Middleware is called before the application.";
        if(Auth::check()) {
            return $next($request);
        }else{
            return redirect('login');
        }
    }
}
