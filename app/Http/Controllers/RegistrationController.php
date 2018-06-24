<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create() 
    {

        return view('registration.create');

    }

    //
    public function store() 
    {

        // Validate
        $this->validate(request(), [
            'alias' => 'required',
            'sucursal' => 'required',
            'password' => 'required|confirmed'
        ]);

        // Create
        $input = request()->all();
        $input['name']  = $input['alias'];
        $input['email'] = $input['alias'];
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        //$user = User::create(request(['alias', 'sucursal', 'password']));

        // Sing in
        auth()->login($user);

        // Redirect
        return redirect()->home();

    }
}
