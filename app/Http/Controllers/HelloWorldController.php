<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Hello World',
        ]);
    }
}
