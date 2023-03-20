<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartCounterMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = auth()->user();
            if ($user->email) {
                $count = Cart::where('email', $user->email)->sum('quantity');
                Session::put('cart_count', $count);
            }
        } else {
            // Si el contador del carrito ya está establecido en la sesión, no lo elimines
            if (!Session::has('cart_count')) {
                Session::forget('cart_count');
            }
        }

        return $next($request);
    }
}
