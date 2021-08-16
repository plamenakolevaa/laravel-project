<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller

{

    public function view()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->input();

        $validator = Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all(':message');
            return Redirect::back()
                ->withInput($input)
                ->withErrors($errors);
        }

        $user = User::where('email', $input['email'])->first();

        $errors = [];

        if (!$user || !Hash::check($input['password'], $user->password)) {
            $errors[] = __('translate.login_form.errors.invalid_creds');
            $email = $input['email'];
            return view('auth.login', compact('errors', 'email'));
        } 

       auth()->login($user);

        return redirect('dashboard');

    }


     public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}