{include file="header.tpl"}

<!--Se deben visualizar los datos de nombre y apellido del vecino, 
horario preferido, domicilio, materiales a retirar y espacio que ocupa-->
<!-- aca va el formulario-->


<section class="Retiros">

    <form action="listRetiros" id="form-retiro" method="GET" class="formretiros">
        <p>Filtrar por fecha</p>
        <input type="date" name="fechaselect" id="fechaselect">
        <button> Filtrar</button>
    </form>
    
    
    {foreach from=$retiros item=retiro}


        <div class="listaRetiros">
            
            <p>Nombre: {$retiro->nombre}</p>
            <p>Apellido: {$retiro->apellido}</p>
            <p>Horario: {$retiro->franja_horaria}</p>
            <p>Direccion: {$retiro->direccion}</p>
            <p>Categoria: {$retiro->categoria}</p>
            <p>Fecha de Creacion: {$retiro->fecha_creacion}</p>
            
        </div>



    {/foreach}







</section>


{include file="templates/footer.tpl"}

















