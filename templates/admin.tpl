{include file="header.tpl"}
<div class="contenedor">
    <div class="encabezado">
        {include file="nav.tpl"}
    </div>
    <h1>Admin</h1>
    <div class="contenedor_admin">
        {include file="editar.categoria.admin.tpl"}
        {include file="agregarcategoria.tpl"}
    </div>
    <div class="contenedor_admin">
        {include file="editar.plato.admin.tpl"}
        {include file="agregar.plato.tpl"}
    </div>
    <div class="contenedor_admin">
        {include file="eliminar.categoria.tpl"}
        {include file="eliminar.categoria.tpl"}
    </div>
</div>

{include file="footer.tpl"}