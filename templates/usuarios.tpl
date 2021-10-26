{include file='templates/header.tpl'}

<div class="main-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre de usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo de Usuario</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                    <tr>
                        <td scope="row">{$user->nombre_apellido}</td>
                        <td scope="row">{$user->email}</td>
                        <td scope="row">
                            <select name="" id="">
                                <option value="">
                                    {foreach from=$user item=$x}
                                        {$x}
                                    {/foreach}
                                </option>
                            </select>
                        </td>


                            <!-- <td><a class="btn btn-success" href="editUser/{$user->email}" id="btn-libro-edit"><i class="far fa-edit"></i></a></td> -->
                        <td>
                            <a class="btn btn-danger" href="deleteUser/{$user->email}" id="btn-categoria-delete">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

{include file='templates/footer.tpl'}