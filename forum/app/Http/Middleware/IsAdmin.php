<?php


namespace App\Http\Middleware;

use App\Models\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class IsAdmin
{
    /**
     * Handle an incoming request.
     * Check if the user is an admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user = auth()->user();
        if ($user && $user->role && $user->role->name === 'admin') {
            return $next($request);
        }

        return redirect('dashboard');
    }
}
