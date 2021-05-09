@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/material')}}" enctype="multipart/form-data">
@csrf 
@include('material.form',['modo'=>'Crear']);

</form>
    
</div>
@endsection