{include file='templates/header.tpl'}
<div class="container-table">
    <div class="main-page">
        <div class="new-genero">
            <h1>{$titulo}</h1>
            <div class="btn-genero">
                <a href="home">
                    <button class="btn btn-primary" id="btn-list-libro">Listado de libros</button> 
                </a>
                <a href="editLibro/1">
                    <button class="btn btn-success" id="btn-list-libro">Listado de Categorias</button> 
                </a>
            </div>    
        </div>    
        <div class="form-create-libro">
            <form class="form-alta" action="agregarCategoria" method="post">
                <div class="mb-3">
                  <label class="form-label">Nombre de Genero</label>
                  <input type="text" name="categoria" id="categoria" class="form-control">
                  <div id="emailHelp" class="form-text">Maximo 50 caracteres.</div>
                </div>
                <div class="form-check">
                  <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Confirmo agregar genero</label>
                </div>
                <div class="submit-create">
                    <button type="submit" class="btn btn-primary" value="Guardar" id="submit-create-libro">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
{include file='templates/footer.tpl'}
