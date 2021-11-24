<div>
                    <form action="deleteDeporte" method="post" class="p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">
                        <h4 class="text-center pb-1 border-bottom">Eliminar Deporte</h4>
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                                <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Borrar Deporte</button>
                    </form>
                </div>