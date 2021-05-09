<h1> {{$modo}} material</h1>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{isset($materiales->nombre)?$materiales->nombre:''}}" id="Nombre">
    <br>
    <label for="unidadmedida">Unidad de medida</label>
    <input type="number" name="unidadmedida" value="{{ isset($materiales->unidadmedida)?$materiales->unidadmedida:''}}" id="unidadmedida">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{isset($materiales->precio)?$materiales->precio:''}}" id="precio">
    <br>
    <label for="stock">Stock</label>
    <input type="number" name="stock" value="{{isset($materiales->stock)?$materiales->stock:''}}" id="stock">
    <br>
    <input type="submit" value="{{$modo}} datos">
    <a href="{{url ('material/') }}"> regresar al listado</a>