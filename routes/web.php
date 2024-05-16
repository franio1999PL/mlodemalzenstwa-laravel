<?php

use App\Http\Controllers\ProfileController;
use App\Models\Application;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ApplicationController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("homepage", [
        "canLogin" => Route::has("login"),
        "canRegister" => Route::has("register")
    ]);
})->name("homepage");

Route::get("/o-szkole", function () {
    return view("about");
})->name("about");

Route::get("/najczesciej-zadawane-pytania", function () {
    return view("faq");
})->name("faq");

Route::post('/application', [ApplicationController::class, 'store'])->name('application');


Route::get('/dashboard', function (Request $request) {
    $sort = $request->get('sort', 'desc'); // domyślnie sortowanie malejąco
    $applications = Application::orderBy('created_at', $sort)->paginate(2);

    return Inertia::render('Dashboard', [
        'applications' => $applications,
        'sort' => $sort,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/email/verify', function () {
        return inertia('Auth/VerifyEmail');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/resend', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Link weryfikacyjny został wysłany!');
    })->name('verification.send');
});

require __DIR__.'/auth.php';
