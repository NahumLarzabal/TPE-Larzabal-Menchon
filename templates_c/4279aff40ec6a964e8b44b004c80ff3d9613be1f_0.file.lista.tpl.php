<?php
/* Smarty version 3.1.39, created on 2021-09-23 03:29:40
  from 'C:\xampp\htdocs\web2\TPE\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614bd88438fb68_86375013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4279aff40ec6a964e8b44b004c80ff3d9613be1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\lista.tpl',
      1 => 1632360554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614bd88438fb68_86375013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TPE\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Crear Tarea</h2>
            <form class="form-alta" action="createTask" method="post">
                <input placeholder="titulo" type="text" name="title" id="title" required>
                <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                <input placeholder="prioridad" type="number" name="priority" id="priority">
                <input type="checkbox" name="done" id="done">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
        <div class="col-md-8">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                    <li class="list-group-item">
                            <a href="viewTask/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre_libro;?>
</a> | <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->descripcion,500);?>
 | <?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
 | <?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>

                            <a class="btn btn-danger" href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
">Borrar</a>
                            
                                <a class="btn btn-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
">Done</a>
                                <!-- <a class="btn btn-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Restore</a> -->
                           
                            
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>

</div><?php }
}
