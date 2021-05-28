{include file="header.tpl"}
<div class="contenedor">
    <div class="encabezado">
        {include file="nav.tpl"}
    </div>
    <h1>{$plato->nombre}</h1>
    <div class="contenedor_platos">
        {include file="listacategorias.tpl"}
        {include file="tarjetadescripcion.tpl"}
    </div>
</div>
{include file="footer.tpl"}