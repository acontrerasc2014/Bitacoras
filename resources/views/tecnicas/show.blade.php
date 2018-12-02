@extends('tecnicas.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts</h2>
            </div> 
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Cuerpo</th>
        </tr>
	    <tr>
	        <td>{{ $tecnica->_id }}</td>
	        <td><a href="/tecnicas/{{ $tecnica->_id }}">{{ $tecnica->nombre }}</a></td>
	        <td>{{ $tecnica->descripcion }}</td> 
	    </tr>
    </table>

