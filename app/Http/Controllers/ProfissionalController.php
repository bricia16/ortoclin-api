<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'denominacao' => ['required'],
        ]);


        
    }
}
