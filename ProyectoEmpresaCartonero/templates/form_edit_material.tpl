{include file="templates/header.tpl"}
<section class="container-fluid fondo_container">
    <form action="guardar_mat" method="POST" class="my-4">
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <div class="form-group-row">
                    <input type="hidden" name="id_material" value={$material->id_material}>
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" value="{$material->nombre}">
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="6" wrap="hard">{$material->descripcion} 
                    </textarea>
                </div>
                <div class="flex col-md-9 col-sd-6">
                <label for="es_aceptado" class="col-md-4 col-sd-5">Indique si este material es aceptado actualmente o
                    no</label>
                <select name="es_aceptado" class="col-md-3 col-sd-6 select_c">
                    <option value="S">Si</option>
                    <option value="N">No</option>
                </select>
            </div>
            </div>
        </div>
        <div class="btn-group m-5">
            <input class='btn btn-info btn-sm' value="Guardar" type="submit">
        </div>
        <div class="btn-group m-5">
            <a class='btn btn-info btn-sm' href="{BASE_URL}listmateriales">Volver</a>
        </div>
    </form>
</section>
</main>
{include file="templates/footer.tpl"}
