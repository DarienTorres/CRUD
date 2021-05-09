@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/material/'.$materiales->id) }}" enctype="multipart/form-data">
    

@csrf 
{{method_field('PATCH')}}
@include('material.form',['modo'=>'Editar']);

</form>


   
</div>
@endsection