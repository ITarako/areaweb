<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index()
    {
        $data = [
            "Laravel Jetstream", "Models Directory", "Model Factory Classes"
        ];
        return view('laravel', compact('data'));
    }
}
