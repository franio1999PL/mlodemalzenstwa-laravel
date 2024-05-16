<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Walidacja danych
        $validated = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'wife_name' => 'required|string|max:255',
            'husband_name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:80',
            'surname' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Zapisz dane do bazy
        

        $mailTo = env('MAIL_TO');

        if ($mailTo == null) {
            return redirect()->back()->with('error','Błąd konfiguracji - brak adresu email');
        }

        $application = Application::create($validated);
        
        // Wysyłka emaila
        Mail::send('emails.application', ['application' => $application], function ($m) use ($application, $mailTo) {
            $m->to($mailTo)->subject('Nowa aplikacja');
        });

        // Przekierowanie po pomyślnym zapisaniu danych
        return redirect()->back()->with('success', 'Formularz został pomyślnie wysłany.');
    }


}
