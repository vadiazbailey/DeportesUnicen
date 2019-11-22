{include file = "header.tpl"}
<h3>{$facultad->nombre_facultad}</h3>
<h4>{$facultad->sede}</h4>
<p>{$facultad->historia}</p>
<figure>
    <img class="mascota" src="{$facultad->imagen}">
</figure>
{include file = "footer.tpl"}