<div class="container_formulario">

    <div class="formulario">
        <form method="POST" action="agregarCategoria">
            <div class="titulo_formulario">
                Cargar plato
            </div>

            <div class="fila_formulario">
                <label for="name"> Nombre </label>
                <input type="text" id="name" name="name" value="">
            </div>
            <div class="fila_formulario">
                <label for="plato"> Categoria:: </label>
                <select name="categoria">
                    {foreach from=$categoria item=categoria}
                        <option value="{$categoria->id}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="fila_formulario">
                <label for="precio">Precio: </label>
                <input type="number" step="any" id="number" name="precio" value="">
            </div>
            <div class="fila_formulario">
                <label for="descripcion"> Descripcion: </label>
            </div>
            <div class="fila_formulario">
                <textarea name="descripcion" cols="30" rows="10" placeholder="Especifique una descripción del plato"></textarea>
            </div>
            <div class="fila_formulario">
                <input type="submit" name="agregar" value="Cargar">
            </div>
        </form>
    </div>

</div>