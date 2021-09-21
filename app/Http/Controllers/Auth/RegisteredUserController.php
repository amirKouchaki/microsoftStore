<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'avatar' => ['image'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', Rules\Password::defaults(), 'confirmed']
        ]);
        if ($request->hasFile('avatar')) {
            $attributes['avatar'] = $request->file('avatar')->store('images/users/avatars/' . Str::random(10));
        }
        $user = User::create($attributes);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('welcome'));
    }
}
