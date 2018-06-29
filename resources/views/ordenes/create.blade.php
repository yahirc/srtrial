@extends('layouts.master') @section('content')

<h1>Ordenes</h1>

</hr>

<form method="POST" action="{{url('/ordenes')}}">
    {{ csrf_field() }}
   
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="form-group">
        @include('layouts.errors')
    </div>
</form>
@stop