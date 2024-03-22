<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ShortCodeController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShortCodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->headers->get('content-type') === 'text/html; charset=UTF-8') {
            $content = $response->getContent();
            $shortCodeController = new ShortCodeController();
            $newContent = $shortCodeController->replaceShortCodes($content);
            $response->setContent($newContent);
        }

        return $response;
    }
}
