<?php
/* Smarty version 3.1.39, created on 2021-10-18 03:45:53
  from 'D:\xampp\htdocs\proyectos\SCRUM\Metodologia\ProyectoEmpresaCartonero\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616cd1d10267a6_25413249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6f0132789f4bcc2712b7f30a179b5af88c576b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\SCRUM\\Metodologia\\ProyectoEmpresaCartonero\\templates\\header.tpl',
      1 => 1634520960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616cd1d10267a6_25413249 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="" />
        <title>Reci-Coop - <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="templates/assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <?php echo '<script'; ?>
 src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
       
        <link href="templates/css/styles.css" rel="stylesheet" />
        <link href="templates/css/estilos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="showFormRetiro"><img src="templates/assets/img/logo.png" alt="Reci-Coop" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Productos aceptados</a></li>
                        <li class="nav-item"><a class="nav-link" href="showFormRetiro">Solicitar un retiro</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<header class="masthead">
    <div class="container">
        <div class="masthead-heading">Reci-coop</div>
        <div class="masthead-subheading"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</div>
        <div class="row mt-4 mb-4"></div><?php }
}
