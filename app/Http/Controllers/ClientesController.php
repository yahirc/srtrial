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
        return view('clientes.show', compact('cliente'));
    }

    public function create() 
    {
        return view('clientes.create');
    }

    public function edit($id) 
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
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

    public function update($id) 
    {

        $this->validate(request(), [
            'cedula' => 'required',
            'nombre' => 'required'
        ]);

        $input = request()->all();
        $key =  ['id' => $id];
        //$cliente = Cliente::findOrFail($id);
        //Cliente::fill($input);
        Cliente::updateOrCreate($key, $input);
        return redirect('clientes');
    }

}
