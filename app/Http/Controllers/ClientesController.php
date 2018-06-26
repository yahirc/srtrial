<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $clientes = Cliente::latest('id')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id) 
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('ciente'));
    }

    public function create() 
    {
        return view('clientes.create');
    }

    public function store() 
    {

        $this->validate(request(), [
            'cedula' => 'required',
            'nombre' => 'required'
        ]);

        $input = request()->all();
        Cliente::create($input);
        return redirect('clientes');
    }

}
