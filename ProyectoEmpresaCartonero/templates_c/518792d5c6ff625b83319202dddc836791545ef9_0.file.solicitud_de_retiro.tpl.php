<?php
/* Smarty version 3.1.39, created on 2021-10-18 03:45:52
  from 'D:\xampp\htdocs\proyectos\SCRUM\Metodologia\ProyectoEmpresaCartonero\templates\solicitud_de_retiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616cd1d0d9f231_34872619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '518792d5c6ff625b83319202dddc836791545ef9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\SCRUM\\Metodologia\\ProyectoEmpresaCartonero\\templates\\solicitud_de_retiro.tpl',
      1 => 1634520960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616cd1d0d9f231_34872619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



            
        <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" id="form-retiro" method="POST" >

            <div class="row">
                <div class="flex col-md-6 col-sd-12">
                    <label for="nombre" class="col-md-4" > Ingrese su nombre: </label>
                    <input  type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" class="col-md-6"/>
                </div>
                <div class="flex col-md-6 col-sd-12">
                    <label for="apellido" class="col-md-4"> Ingrese su apellido: </label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" class="col-md-6"/>
                </div>
            </div>
            <div class="row mt-2">
                <div class="flex col-md-6 col-sd-12">
                    <label for="direccion" class="col-md-4"> Ingrese su dirección: </label>
                    <input class="col-md-6" type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección"/>
                </div>
                <div class="flex col-md-6 col-sd-12">
                    <label for="telefono" class="col-md-4"> Ingrese su telefono: </label>
                    <input class="col-md-6" type="number" name="telefono" id="telefono" placeholder="Ingrese su número telefónico"/>
                </div>
            </div>
            <div class="row mt-2 mb-2">
            <div class="flex col-md-6 col-sd-12">
                    <label for="categoria" class="col-md-4 col-sd-5">Ingrese el tamaño</label>
                    <select name="categoria" class="col-md-6 col-sd-6">
                        <option value="A">Entra en una caja</option>
                        <option value="B">Entra en el baúl de un auto</option>
                        <option value="C">Entra en la caja de una camioneta</option>
                        <option value="D">Es necesario un camión</option>
                    </select>
                </div>
            </div>
                
                
            <div class="row">
                <div class="flex col-md-9 col-sd-6">
                    <label for="franja_horaria" class="col-md-4 col-sd-5">Ingrese la franja horaria preferida</label>
                    <select name="franja_horaria" class="col-md-3 col-sd-6 select_c">
                        <option value="M">De 9 a 12</option>
                        <option value="T">De 13 a 17</option>
                    </select>
                </div>
                
                <div class="col-md-3 col-sd-4">
                    <button type="submit" id="send-form">Enviar solicitud</button>
                </div>
            </div>


        </form>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
