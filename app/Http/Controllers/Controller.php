<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function getError(
        \Exception $err, 
        Int $status_code
    ){
        return response()->json([
            'response' => 'error',
            'data' => [
                'message' => $err->getMessage(),
                'code' => $err->getCode(),
                'line' => $err->getLine(),
                'trace' => $err->getTraceAsString()
            ]
        ], $status_code);
    }
}
