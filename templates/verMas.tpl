{include file = "header.tpl"}
<section>
   <h3>{$facultad->nombre_facultad}</h3>
    <h4>{$facultad->sede}</h4>
    <p>{$facultad->historia}</p>
</section>
<figure>
    <img class="mascota" src="{$facultad->imagen}">
</figure>
{include file= "comentarios.tpl"}
{include file = "footer.tpl"}