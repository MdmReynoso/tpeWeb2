{include file="header.tpl"}
<div class="encabezado">
    {include file="nav.tpl"}
</div>
<div class="container_form_edit">

    <div class="formulario">
        <form method="POST" action="editarCategoria">
            <div class="titulo_formulario">
                Editando {$categoria->nombre}
            </div>
            <div class="fila_formulario">
                <label for="categoria"> Categoria a editar: </label>
                <select name="categoria">
                    <option value="{$categoria->id}">{$categoria->nombre}</option>
                </select>
            </div>
            <div class="fila_formulario">
                <label for="name"> Nuevo nombre: </label>
                <input type="text" id="name" name="name" value="{$categoria->nombre}">
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