<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Request;

class SucursalesController extends Controller
{
    //
    public function index() 
    {
        //$sucursales = Sucursal::all();
        $sucursales = Sucursal::latest('created_at')->get();
        //$sucursales = Sucursal::latest('created_at')->prueba()->get();
        //return view('sucursales.index')->with('sucursales', $suc);
        return view('sucursales.index', compact('sucursales'));
    }

    //
    public function show($id) 
    {
        $sucursal = Sucursal::findOrFail($id);
        //dd($suc);
        return view('sucursales.show', compact('sucursal'));
    }

    //
    public function create() 
    {
        return view('sucursales.create');
    }

    //
    public function store() 
    {
        $input = Request::all();
        //$input['campo'] = 'valor';
        Sucursal::create($input);
        return redirect('sucursales');
    }
}
