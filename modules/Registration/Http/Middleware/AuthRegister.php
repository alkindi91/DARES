<?php namespace Modules\Registration\Http\Middleware; 

use Closure;

class AuthRegister {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->get('registration')) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->route('registration.registrar.login');
            }
        }
    	return $next($request);
    }
    
}
