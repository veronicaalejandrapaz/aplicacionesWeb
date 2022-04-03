Formulario de creacion de menu

<form action="{{ url('/menu')}}" method="post" enctype="multipart/form-data">
@csrf

    <label for="nombre"> Nombre </label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="descripcion"> Descripcion </label>
    <input type="text" name="descripcion" id="descripcion">
    <br>
    <label for="precio"> Precio </label>
    <input type="float" name="precio" id="precio">
    <br>
    <label for="tipo"> Tipo de menu</label>
    <input type="text" name="tipo" id="tipo">
    <label for="foto"> Foto </label>
    <input type="file" name="foto" id="foto">
    <br>

    <input type="submit" value="Guardar Datos">

</form>