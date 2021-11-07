{include file="templates/header.tpl"}

           
        <form action="{$action}" id="form-materiales">

            <div class="row">
                <div class="flex col-md-6 col-sd-12">
                    <label for="nombre" class="col-md-4" > Material: </label>
                    <input  type="text" name="nombre" id="nombre" placeholder="Ingrese nombre material" class="col-md-6"/>
                </div>
                <div class="flex col-md-6 col-sd-12">
                    <label for="descripcion" class="col-md-4"> Condicines de aceptación: </label>
                    <input type="text" name="descripcion" id="descripcion" placeholder="Ingrese condiciones de aceptación" class="col-md-6"/>
                </div>
            </div>
                     
                
            <div class="row">
                <div class="flex col-md-9 col-sd-6">
                    <label for="es_aceptado" class="col-md-4 col-sd-5">Indique si este material es aceptado actualmente o no</label>
                    <select name="es_aceptado" class="col-md-3 col-sd-6 select_c">
                        <option value="S">Si</option>
                        <option value="N">No</option>
                    </select>
                </div>
                
                <div class="col-md-3 col-sd-4">
                    <button type="submit" id="send-form">Grabar</button>
                </div>
            </div>


        </form>



{include file="templates/footer.tpl"}
