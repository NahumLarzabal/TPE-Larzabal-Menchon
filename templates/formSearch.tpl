
            <select type="text" name="filtrado-libros" id="filter-table" class="form-select" aria-label="Default select example" >
                <option selected disabled>Elemento a filtrar</option>      
                <option name="filtroTitulo" value="nombre_libro">Titulo</option>
                <option value="id_categoria">Genero</option>
                <option name="filtroAutor" value="autor">Autor</option>
            </select>
            <form class="invisible flex" id="select-titulo"  action="search/titulo" method="POST">
                <input type="text" class="margin-right-10px" name="tituloIn" placeholder="Filtre por Titulo">
                <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
            </form>
            <form class="invisible flex" id="select-autor" action="search/autor" method="POST">
                <input type="text" class="margin-right-10px" name="autorIn" placeholder="Filtre por Autor">
                <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
            </form>
            <form  class="invisible flex" id="select-genero"  action="search/genero" method="POST">
                <input type="text" class="margin-right-10px" name="generoIn" placeholder="Filtre por Genero">
                <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
            </form>     