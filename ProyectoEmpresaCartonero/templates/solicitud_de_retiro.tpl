{include file="header.tpl"}

<form action={$action} id="form-retiro">

    <div class="row">
        <label for="nombre" class="col-md-6 col-sd-12"> Ingrese su nombre: </label>
        <input class="col-md-6 col-sd-12" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"/>
        <label for="apellido" class="col-md-6 col-sd-12"> Ingrese su apellido: </label>
        <input class="col-md-6 col-sd-12" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"/>
    </div>
    <div class="row">
        <label for="direccion" class="col-md-6 col-sd-12"> Ingrese su dirección: </label>
        <input class="col-md-6 col-sd-12" type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección"/>
        <label for="telefono" class="col-md-6 col-sd-12"> Ingrese su telefono: </label>
        <input class="col-md-6 col-sd-12" type="number" name="telefono" id="telefono" placeholder="Ingrese su número telefónico"/>
    </div>
    <div class="row">
        <label for="cantidad" class="col-md-9 col-sd-8">Ingrese la franja horaria preferida</label>
        <select name="cantidad" class="col-md-3 col-sd-4">
            <option value="M">De 9 a 12</option>
            <option value="T">De 13 a 17</option>
        </select>
        <label for="cantidad" class="col-md-9 col-sd-8">Ingrese el tamaño</label>
        <select name="cantidad" class="col-md-3 col-sd-4">
            <option value="A">Entra en una caja</option>
            <option value="B">Entra en el baúl de un auto</option>
            <option value="C">Entra en la caja de una camioneta</option>
            <option value="D">Es necesario un camión</option>
        </select>
    </div>
    <div class="row">
        <button type="submit" id="send-form">Enviar solicitud</button>
    </div>


</form>


{include file="footer.tpl"}
