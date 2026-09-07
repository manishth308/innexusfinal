<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PasswordResetController extends Controller
{
    /**
     * Shown both for a brand-new blogger invite (set your password for the
     * first time) and for an ordinary "forgot password" reset - Laravel's
     * password broker doesn't distinguish between the two, and neither
     * does this form.
     */
    public function show(Request $request, string $token): View
    {
        return view('pages.blog.reset-password', [
            'token' => $token,
            'email' => $request->query('email', ''),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $status = Password::reset(
            $validated,
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                    // Clicking a token that was only ever emailed to this
                    // address is proof of inbox access, so this doubles as
                    // email verification - no separate "confirm your email"
                    // step needed for accounts created via the blogger
                    // invite flow.
                    'email_verified_at' => $user->email_verified_at ?? now(),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status !== Password::PASSWORD_RESET) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);
        }

        return redirect()
            ->route('filament.blogs.auth.login')
            ->with('success', 'Your password has been set. You can log in now.');
    }
}
