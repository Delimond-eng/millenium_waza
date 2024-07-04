<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait ValidationAndExceptionHandler
{
    public function validateAndHandle(Request $request, array $rules, callable $callback)
    {
        try {
            // Validation des données
            $data = $request->validate($rules);
            // Exécution de la logique de callback
            $result = $callback($data);

            // Redirection en cas de succès
            return response()->json(["result"=>$result]);

        } catch (\Exception $e) {
            // Redirection en cas d'exception générale
            return response()->json(["error"=>$e->getMessage()]);
        }
        catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return response()->json(['error' => $errors ]);
        }
        catch (\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->getMessage() ]);
        }
    }
}