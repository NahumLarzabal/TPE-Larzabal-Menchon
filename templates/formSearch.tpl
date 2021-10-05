<form action="search" method="POST">
<select type="text" name="filtrado-libros" id="filter-table" class="form-select" aria-label="Default select example" >
    <option selected disabled>Elemento a filtrar</option>       {* select genero *}
    <option name="filtroTitulo" value="nombre_libro">Titulo</option>
    <option value="id_categoria">Genero</option>
    <option name="filtroAutor" value="autor">Autor</option>
</select>
<input type="text" class="invisible" id="select-titulo"  name="tituloIn" placeholder="Filtre por Titulo"> {* input titlo *}
<input type="text" class="invisible" id="select-autor" name="autorIn" placeholder="Filtre por Autor"> {* input autor *}
<input type="text" class="invisible" id="select-genero" name="generoIn" placeholder="Filtre por Gnero">
<input type="submit" class="btn btn-secondary" id="btn-list-libro" name="Filtrar">
</form>