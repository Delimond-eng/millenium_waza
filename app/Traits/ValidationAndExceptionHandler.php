<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait ValidationAndExceptionHandler
{
    public function validateAndHandle(Request $request, array $rules, string $route, callable $callback)
    {
        try {
            // Validation des données
            $data = $request->validate($rules);
            // Exécution de la logique de callback
            $result = $callback($data);

            // Redirection en cas de succès
            return redirect()->route($route)->with([
                "title" => $route,
                "result" => $result
            ]);

        } catch (\Exception $e) {
            // Redirection en cas d'exception générale
            return redirect()->route($route)->with([
                "title"=> $route,
                "error" => $e->getMessage(),
            ])->withInput();
        }
    }
}