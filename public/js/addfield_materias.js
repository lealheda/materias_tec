function agregar() {
    campo = '<label for="unidad">Unidad</label><input class="form-control" required="required" placeholder="Nombre de la unidad" name="unidad" type="text" id="unidad"><label for="descripcion">Descripcion</label><input class="form-control" required="required" placeholder="Descripcion de la unidad" name="descripcion" type="text" id="descripcion">'
    $("#unidades").append(campo);
}