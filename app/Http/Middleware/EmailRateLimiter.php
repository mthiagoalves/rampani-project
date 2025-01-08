<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class EmailRateLimiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Assumindo que o email do usuário está disponível no request
        $email = $request->input('email');

        if ($email) {
            // Chave única para armazenar o contador de requisições
            $key = 'email_rate_limit_' . $email;

            // Obtém o contador atual do cache
            $requestCount = Cache::get($key, 0);

            if ($requestCount >= 4) {
                // Se o número de requisições for maior ou igual a 4, bloqueia a requisição
                return response()->json(['message' => 'Muitas requisições. Tente novamente mais tarde.'], 429);
            }

            // Incrementa o contador de requisições
            Cache::put($key, $requestCount + 1, now()->addMinutes(3));
        }

        return $next($request);
    }
}
