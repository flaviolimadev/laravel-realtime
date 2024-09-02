<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CustomAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            // Verifica se a solicitação espera um JSON (para API, por exemplo)
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthorized.'], 401);
            }

            // Redireciona para a rota de login personalizada
            return redirect()->route('auth.login')->with('message', 'Please log in to access this page.');
        }

        // Se o usuário estiver autenticado, continue com a solicitação
        $response = $next($request);
        return $response;
    }
}
