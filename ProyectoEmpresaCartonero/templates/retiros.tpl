{include file="header.tpl"}

<!--Se deben visualizar los datos de nombre y apellido del vecino, 
horario preferido, domicilio, materiales a retirar y espacio que ocupa-->

<section>

    {foreach from=$retiros item=retiro}


        <div class="listaRetiros">
            
            <p>Nombre: {$retiro->nombre}</p>
            <p>Apellido: {$retiro->apellido}</p>
            <p>Horario: {$retiro->franja_horaria}</p>
            <p>Direccion: {$retiro->direccion}</p>
            <p>Categoria: {$retiro->categoria}</p>
            
        </div>



    {/foreach}







</section>


{include file="templates/footer.tpl"}

















