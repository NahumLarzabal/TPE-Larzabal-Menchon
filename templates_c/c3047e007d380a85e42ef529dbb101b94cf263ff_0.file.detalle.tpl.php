<?php
/* Smarty version 3.1.39, created on 2021-09-23 03:18:07
  from 'C:\xampp\htdocs\web2\TPE\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614bd5cf9cf572_47761722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3047e007d380a85e42ef529dbb101b94cf263ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\detalle.tpl',
      1 => 1632359837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614bd5cf9cf572_47761722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre_libro;?>
</h1>
    <h2>Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
</h2>
    <h2>Genero: <?php echo $_smarty_tpl->tpl_vars['libro']->value->categoria;?>
</h2>
    <h2>Precio: <?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>
</h2>
    <h2>Descripcion: <?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</h2>

    <a href="home" > Volver </a>
</div>
<?php }
}
