<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'wife_name' => 'required|string|max:255',
            'husband_name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'surname' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Zapisz dane lub wykonaj inne operacje
        // np. $application = new Application($request->all());
        // $application->save();

        // Przekierowanie po pomyślnym zapisaniu danych
        return redirect()->back()->with('success', 'Formularz został pomyślnie wysłany.');
    }
}
