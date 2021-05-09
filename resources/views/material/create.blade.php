create 2.0
<form method="post" action="{{url('/material')}}" enctype="multipart/form-data">
@csrf 
@include('material.form')

</form>
    
