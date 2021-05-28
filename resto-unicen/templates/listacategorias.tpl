<div class="container_categorias">
<h3>Lista de categorias</h3>
    <div class="lista">
    <ul>
        {foreach from=$categorias item=$categoria} 
            <li class="categoria"> <a href="categoria/{$categoria->id}">{$categoria->nombre}</a>
            {if $username}
                <a class="boton_lista" href="formEditarCategoria/{$categoria->id}">Editar</a>
                <a class="boton_lista" href="eliminarCategoria/{$categoria->id}">Eliminar</a>
            {/if}
            </li>
        {/foreach}
        
    </ul>
    </div>

</div>