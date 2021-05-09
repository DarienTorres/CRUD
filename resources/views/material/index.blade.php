index 1.0
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


            <td>
            <a href="{{ url('/material/'.$materiales->id.'/edit')}}">
            
            Editar 
            </a>

            @php
            if ($materiales-> stock==0){
            @endphp
            <form method="post" action="{{url('/material/'.$materiales->id)}}">
            @csrf
            {{ method_field('DELETE') }}
                <input type="submit" value="Borrar" onclick="return confirm ('Quieres borrar?')">
            </form>
            @php 
            }
            @endphp
            </td>

        </tr>
        @endforeach
    </tbody>
</table>