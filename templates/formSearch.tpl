<select type="text" name="filtrado-libros" id="filter-table" class="form-select" aria-label="Default select example" >
<option selected disabled>Elemento a filtrar</option>      
<option name="filtroTitulo" value="nombre_libro">Titulo</option>
<option value="id_categoria">Genero</option>
<option name="filtroAutor" value="autor">Autor</option>
</select>
<form class="invisible" id="select-titulo"  action="search/titulo" method="POST">
    <input type="text"  name="tituloIn" placeholder="Filtre por Titulo">
    <input type="submit" class="btn btn-secondary" id="btn-list-libro" name="Filtrar">

    </form>
    <form class="invisible" id="select-autor" action="search/autor" method="POST">

    <input type="text"   name="autorIn" placeholder="Filtre por Autor">
    <input type="submit" class="btn btn-secondary" id="btn-list-libro" name="Filtrar">

    </form>
    <form  class="invisible" id="select-genero"  action="search/genero" method="POST">
    <input type="text" name="generoIn" placeholder="Filtre por Genero">
    <input type="submit" class="btn btn-secondary" id="btn-list-libro" name="Filtrar">
</form>

