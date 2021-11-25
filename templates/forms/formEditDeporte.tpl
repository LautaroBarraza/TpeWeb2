<div class="d-flex">
                    <form class="d-flex flex-column gap-3 p-3 mb-4 border border-1 rounded-3" action="updateDeporte" method="post">
                        <h4 class="text-center pb-1 border-bottom">Actualizar Deporte</h4>
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                                <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <input type="text" name="deporteEditado" id="" placeholder="actualice nombre de deporte" required>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Actualizar</button>
                    </form>
                </div>