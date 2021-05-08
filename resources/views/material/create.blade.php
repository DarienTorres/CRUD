create 2.0
<form method="post" action="{{url('/material')}}" enctype="multipart/form-data">
@csrf 

    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="unidadmedida">Unidad de medida</label>
    <input type="number" name="unidadmedida" id="unidadmedida">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio">
    <br>
    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock">
    <br>
    <input type="submit" value="Guardar datos">

</form>
    
