<div class="container_formulario">

    <div class="formulario">
        <form method="POST" action="formEditarCategoria">
            <div class="titulo_formulario">
                Editar categoria
            </div>
            <div class="fila_formulario">
                <label for="categorias"> Seleccionar categoria: </label>
                <select name="categoria">
                    {foreach from=$categorias item=categoria}
                        <option value="{$categoria->id}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="fila_formulario">
                <input type="submit" name="editar" value="Ir a edicion">
            </div>
        </form>
    </div>
</div>