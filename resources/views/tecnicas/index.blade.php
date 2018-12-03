@extends('tecnicas.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tecnicas</h2>
            </div>
            <div class="pull-right">
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
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
	    @foreach ($tecnicas as $tecnica)
	    <tr>
	        <td>{{ $tecnica->_id }}</td>
	        <td><a href="/tecnicas/{{ $tecnica->_id }}">{{ $tecnica->nombre }}</a></td>
	        <td>{{ $tecnica->descripcion }}</td> 
	    </tr>
	    @endforeach
    </table>


@endsection