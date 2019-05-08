@extends('layouts.master')

@section('content')

    <h1>Clientes</h1>

    <hr style="background-color: #5DADE2" />
    
    <nav class="navbar navbar-light bg-light justify-content-between">
        <form class="form-inline">
            <input type="search" class="form-control form-control-sm mr-sm-2" placeholder="Busqueda" aria-label="Search">
            <button type="submit" class="btn btn-sm btn-outline-info my-2 my-sm-0" >Buscar</button>
        </form>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ url('/clientes/create') }}" class="btn btn-sm btn-success" role="button">Crear</a>
        </form>
    </nav>
    <table class="table table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Cedula</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <th scope="row">{{ $cliente->nombre }} {{ $cliente->apellido }}</th>
                <td>{{ $cliente->tel_res }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-success">Editar</button>
                    <button type="button" class="btn btn-sm btn-success">Ordenes</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
    </nav>

@stop 