{include file="templates/header.tpl"}



            
        <form action="{$action}" id="form-materiales" method="POST" >
        <div id="content">
            <div class="row">
                
                    <label for="cartonero" class="col-md-4" > Elija el cartonero: </label>
                    <select  name="cartonero" id="cartonero" class="col-md-6">
                        <option value="1">Windu</option>
                        <option value="2">Palpatine</option>
                        <option value="3">Kit Fisto</option>
                    </select>
                
               
            </div>
            <div class="row mt-2" id="mat">
                <div class="flex col-md-6 col-sd-12">
                    <label for="material" class="col-md-4"> Ingrese el material: </label>
                    <select class="col-md-6" type="text" name="material[]">
                        {foreach $materiales as $material}
                            <option value="{$material->id_material}">{$material->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="flex col-md-6 col-sd-12">
                    <label for="cant" class="col-md-4"> Ingrese la cantidad de kg: </label>
                    <input class="col-md-6" type="number" name="cantidad[]" placeholder="Ingrese la cantidad de material"/>
                </div>
            </div>
        </div>
            <div class="row mt-2 mb-2">
                <button type="button" id="addColumn">Agregar un material</button>
                <button type="submit">Enviar pesaje</button>
            </div>



        </form>


<script src="templates/js/script.js"></script>
{include file="templates/footer.tpl"}
