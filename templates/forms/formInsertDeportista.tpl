<div>
            
                    <form style="--bs-bg-opacity: .2;" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column" action="insertDeportista" method="post">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deportista</h4>
                        
                        <input type="text" name="nombre" placeholder="nombre" required>
                        <input type="text" name="apellido" placeholder="apellido" required>
                        <input type="number" name="edad" placeholder="edad" required>
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deportista</button>

                    </form>

                </div>