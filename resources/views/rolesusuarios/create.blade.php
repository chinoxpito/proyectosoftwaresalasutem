@extends('rolesusuarios.plantilla')
@section('contenido')
                   @if (count($errors) > 0)
	                    <div class="alert alert-danger">
	                      <ul>
	                        @foreach ($errors->all() as $error)
	                           <li>{{ $error }}</li>
                          @endforeach
	                      </ul>
                      </div>
                    @endif
<p>
	
	<table>
		<td width=505><h2>Registro de rolesusuarios</h2></td>
	</table>
</p>
<h4>Nuevo Rol</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
			{!! Form::open(['route' => 'rolesusuarios.store']) !!}
				<div class="form-group">
					{!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'Rut']) !!}
				</div>
				<div class="form-group">
					<p1>Rol: </p1>{!! Form::select('rol_id',$rol)!!}
				</div>
				
				<div class="form-group">
					{!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
				</div>
			{!! Form::close() !!}
      <p>
	    	@if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
      <table>
		<td><a href="/rolesusuarios" class="btn btn-default btn-sm">Volver</a>
		
	</table>
@stop
