@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
{{
    Session::get ('mensaje')
}}
@endif
<a href="{{url ('material/create') }}" class="btn btn-success"> Registrar nuevo material</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>unidad de  medida</th>
            <th>precio</th>
            <th>stock</th>
            <th>total de producto</th>
          
        </tr>
    </thead>
    <tbody>
    @foreach( $material as $materiales )
        <tr>
            <td>{{$materiales-> id}}</td>
            <td>{{$materiales-> nombre}}</td>
            <td>{{$materiales-> unidadmedida}}</td>
            <td>{{$materiales-> precio}}</td>
            <td>{{$materiales-> stock}}</td>

            @php
            $total_por_producto=0;
            $total_por_producto =$materiales-> precio * $materiales-> stock;
           
            @endphp
            <td>{{$total_por_producto}}</td>

            <!-- sección de editar con validación -->
            <td>
            <a href="{{ url('/material/'.$materiales->id.'/edit')}}" class="btn btn-warning">
            
            Editar 
            </a>


            <!-- sección del botón borrar con validación -->
            @php
            if ($materiales-> stock==0){
            @endphp
            <form method="post" action="{{url('/material/'.$materiales->id)}}" class="d-inline">
            @csrf
            {{ method_field('DELETE') }}
                <input type="submit" value="Borrar" onclick="return confirm ('Quieres borrar?')" class="btn btn-danger">
            </form>
            @php 
            }
            @endphp
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection