<div class="container_formulario">

    <div class="formulario">
        <form method="POST" action="eliminarCategoria">
            <div class="titulo_formulario">
                Eliminar categoria
            </div>
            <div class="fila_formulario">

                <label for="categoria"> Seleccionar categoria: </label>
                <select name="categoria">
                    {foreach from=$categorias item=categoria}
                        <option value="{$categoria->id}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="fila_formulario">
                <input type="submit" name="editar" value="Eliminar">
            </div>
        </form>
    </div>

</div>