<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->route('id');
        
        $user = User::with('role')->find($userId);

        if ($user && $user->role && $user->role->name === 'admin') {
            return $next($request);
        }
        
        abort(401);
    }
}
