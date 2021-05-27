{include file="header.tpl"}
<div class="encabezado">
    {include file="nav.tpl"}
</div>
<div class="container_form_edit">

    <div class="formulario">
        <form method="POST" action="editarPlato">
            <div class="titulo_formulario">
                Editando {$plato->nombre}
            </div>
            <div class="fila_formulario">

                <label for="plato"> Plato a editar: </label>
                <select name="plato">
                    <option value="{$plato->id}">{$plato->nombre}</option>
                </select>
            </div>
            <div class="fila_formulario">
                <label for="name"> Nuevo nombre: </label>
                <input type="text" id="name" name="name" value="{$plato->nombre}">
            </div>
            <div class="fila_formulario">
                <label for="descripcion"> Descripcion: </label>
                <input type="text" id="name" name="descripcion" value="{$plato->descripcion}">
            </div>
            <div class="fila_formulario">
                <label for="preci">Precio: </label>
                <input type="number" step="any" id="number" name="precio" value="{$plato->precio}">
            </div>
            <div class="fila_formulario">
                <label for="detail"> Detalles: </label>
            </div>
            <div class="fila_formulario">
                <textarea name="detail" cols="30" rows="10">{$plato->descripcion}</textarea>
            </div>
            <div class="fila_formulario">
                <input type="submit" name="editar" value="Editar">
            </div>
            {if $error}
                <div class="error">
                    *{$error}
                </div>
            {/if}
        </form>
    </div>
</div>
{include file="footer.tpl"}