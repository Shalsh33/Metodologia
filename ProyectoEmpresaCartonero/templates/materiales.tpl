 {include 'header.tpl'}
 <section class="container-fluid fondo_container">
     <div class="row">
         <div class="col-12">
             <h2>Listado de materiales aceptados</h2>
             {if !empty($mensaje)}
                 <div class="alert alert-dismissible alert-warning">
                     <h4 class="alert-heading">Datos erróneos</h4>
                     <p>{$mensaje}</p>
                 </div>
             {/if}
             {if !empty($mensajeBien)}
                <div class="alert alert-dismissible alert-success" role="alert">
                    <h4 class="alert-heading">Datos actualizados</h4>
                    <p>{$mensajeBien}</p>
                </div>
            {/if}
             <div class="table-responsive">
                 <table class="table mt-3 text-left" id="tablaMateriales">
                     <thead>
                         <tr>
                             <th>Nombre</th>
                             <th>Descripción</th>
                             <th>Acciones</th>
                         </tr>
                     </thead>
                     <tbody id="tabla-Body-materiales">
                         {foreach from=$materiales item=mat}
                             <tr>
                                 <td>
                                     {$mat->nombre}
                                 </td>
                                 <td>
                                     {$mat->descripcion}
                                 </td>
                                 <td>
                                     <a class='btn btn-danger btn-sm' href='eliminar_mat/{$mat->id_material}'>Eliminar
                                     </a>
                                     <a class='btn btn-info btn-sm' href='editar_mat/{$mat->id_material}'>Editar
                                     </a>
                                 </td>
                             </tr>
                         {/foreach}
                     </tbody>
                 </table>
             </div>

         </div>
     </div>
 </section>
  {include file='condiciones.tpl'}
 </main>
 {include file='footer.tpl'}