<div>
                    <form class="p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column" action="updateDeportista" method="post">
                        <h4 class="text-center pb-1 border-bottom">Editar Deportista</h4>
                        <select name="deportistaEdit" id="">
                            {foreach from=$deportistas item=$deportista}
                                <option value='{$deportista->id_deportista}'>{$deportista->apellido}</option>
                            {/foreach}
                        </select>
                        <input type="text" name="nombreEdit" id="" placeholder="actualice nombre de deportista" required>
                        <input type="text" name="apellidoEdit" placeholder="apellido" required>
                        <input type="number" name="edadEdit" placeholder="edad" required>
                        <select name="deporteEdit" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">actualizar deportista</button>
                    </form>
                </div>