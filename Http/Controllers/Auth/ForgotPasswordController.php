<?php
// app/Http/Controllers/Auth/ForgotPasswordController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:6,1')->only('sendResetLinkEmail');
    }

    /**
     * Display the form to request a password reset link.
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Send a reset link to the given user.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // Rate limiting by IP and email
        $key = 'password-reset:' . $request->ip() . ':' . $request->email;
        
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            throw ValidationException::withMessages([
                'email' => ["Too many attempts. Please try again in {$seconds} seconds."],
            ]);
        }

        RateLimiter::hit($key, 300); // 5 minutes

        $response = Password::sendResetLink(
            $this->credentials($request)
        );

        if ($response === Password::RESET_LINK_SENT) {
            return back()->with('status', __($response));
        }

        // Don't reveal if email exists for security
        return back()->with('status', 'If the email exists, a reset link has been sent.');
    }

    /**
     * Validate the email for the given request.
     */
    protected function validateEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email:rfc,dns', // More strict email validation
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
        ], [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.regex' => 'Please enter a valid email format.',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    /**
     * Get the needed authorization credentials from the request.
     */
    protected function credentials(Request $request): array
    {
        return $request->only('email');
    }
}