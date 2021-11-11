{include file="templates/header.tpl"}
<section class="container-fluid fondo_container">
    <h2>Editar datos de material</h2>
    <form action="guardar_mat" method="POST" class="my-4">
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <div class="form-group-row">
                    <input type="hidden" name="id_material" value={$material->id}>
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" value="{$material->nombre}">
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="6" wrap="hard">{$material->descripcion} 
                    </textarea>
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
