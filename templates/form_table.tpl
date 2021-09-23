{include file='templates/header.tpl'}
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
            <h1>{$titulo}</h1>

            <ul class="list-group">
                {foreach from=$libros item=$libro}
                    <li class="list-group-item">
                            <a href="viewTask/{$libro->id}">{$libro->nombre_libro}</a> | {$libro->descripcion|truncate:500} | {$libro->autor} | {$libro->precio}
                            <a class="btn btn-danger" href="deleteTask/{$libro->id}">Borrar</a>
                            
                                <a class="btn btn-success" href="updateTask/{$libro->id}">Done</a>
                                <!-- <a class="btn btn-success" href="updateTask/{$task->id_tarea}">Restore</a> -->
                           
                            
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>
{include file='templates/footer.tpl'}