<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create() 
    {
        return view('sessions.create');
    }
    
    public function store() 
    {
        
        $input = request()->all();

        $ok = auth()->attempt(['email' => $input['alias'], 'password' => $input['password']]);

        if (!$ok) {
            return back()->withErrors([
                'message' => 'Error.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy() 
    {
        auth()->logout();
        return redirect()->home();
    }

}
