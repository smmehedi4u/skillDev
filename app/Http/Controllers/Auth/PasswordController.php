<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }

    // public function login(Request $request)
    // {
    //     $input = $request->all();

    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->is_admin == 1) {
    //             return redirect()->route('admin.home');
    //         }else{
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }

    //}
}
