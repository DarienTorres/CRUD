
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{$materiales->nombre}}" id="Nombre">
    <br>
    <label for="unidadmedida">Unidad de medida</label>
    <input type="number" name="unidadmedida" value="{{$materiales->unidadmedida}}" id="unidadmedida">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{$materiales->precio}}" id="precio">
    <br>
    <label for="stock">Stock</label>
    <input type="number" name="stock" value="{{$materiales->stock}}" id="stock">
    <br>
    <input type="submit" value="Guardar datos">