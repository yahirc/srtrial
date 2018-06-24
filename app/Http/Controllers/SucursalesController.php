<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalesController extends Controller
{

    //
    public function __construct() 
    {
        //$this->middleware('auth');
        $this->middleware('auth')->except(['index']);
    }

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

        $this->validate(request(), [
            'codsuc' => 'required',
            'nomsuc' => 'required'
        ]);

        $input = request()->all();
        //$input['campo'] = 'valor';
        Sucursal::create($input);
        return redirect('sucursales');
    }

}
