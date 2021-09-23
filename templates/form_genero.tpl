 <select>
                        {foreach from=$categorias  item=$genero}
                        <option>{$genero->categoria}</option>
                        {/foreach}
                    </select>