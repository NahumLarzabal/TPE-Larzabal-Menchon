<h1>{$titulo}</h1>
<div class="container">

<ul class="list-group">
{foreach from=$libros item=$libro }
    <li class="list-group-item"
        <div class="card-body">
        {$libro->autor} : {libro->nombre_libro} 
       
        {* <a class="btn btn-danger" href="deleteTask/'{$libro->id}'">Borrar</a> 
       <a class="btn btn-success" href="updateTask/'{$libro->id}'">Done</a>
        {else} *}

        
        </div>
    </li>;
{/foreach}

{* <li>
<div class="card-body"> <a href="viewTask/'.$tarea->id_tarea.'">'. $tarea->titulo .'</a>: '.$tarea->descripcion .' - '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</div>
</li>'; *}
</ul>
         
            <h2>Crear Tarea</h2>
            <form action="createTask" method="post">
                <input type="text" name="title" id="title">
                <input type="text" name="description" id="description">
                <input type="number" name="priority" id="priority">
                <input type="checkbox" name="done" id="done">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
            </div>