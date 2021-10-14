{include file="head.tpl"}

        <body>
        <div style="--bs-bg-opacity: .5;" class=" bg-secondary min-vh-100 justify-content-center gap-3 d-flex ">
        <div class="mb-4 d-flex flex-column align-items-center justify-items-center h-75 gap-4 rounded-3 p-4 mt-4 w-75 bg-white">
            <h1 class="text-center text-capitalize">{$titulo}</h1>
            <div class="d-flex flex-column align-items-center">
                {if $nombreUsuario !=null}
                <h1 class="text-center text-capitalize">hola {$nombreUsuario}</h1>
                <a class="p-2 rounded-3 border border-2 border-danger text-danger fw-bold text-center text-capitalize text-decoration-none" href="logOut">Log Out</a>

                {else}
                <a class="p-2 rounded-3 border border-2 border-primary text-primary text-center fw-bold text-capitalize text-decoration-none" href="login">login</a>
                {/if}
            </div>

            <div class="my-3 d-flex flex-column p-3 border">
                <h3 class="border-bottom pb-2 ">Filtrar Deportes</h3>


                {foreach from=$deportes item=$deporte}
                        <a class="text-center text-capitalize text-decoration-none" href='Deporte/{$deporte->deporte}'>{$deporte->deporte}</a>
                {/foreach}
            </div>

            <h4 class="pb-1 border-bottom">Deportistas</h4>

            <ul class="list-group  border">

                {foreach from=$deportistas item=$deportista}
                
                    <li style="--bs-bg-opacity: .2;" class="d-flex justify-content-between border-0 bg-secondary list-group-item ">
                        Deporte:
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deporte/{$deportista->deporte}">{$deportista->deporte}</a> 
                        Deportista:
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deportistas/{$deportista->id_deportista}">{$deportista->nombre} {$deportista->apellido}</a>

                        <a style="--bs-bg-opacity: .4;" class="rounded list-group-item bg-danger border-0 text-decoration-none text-black text-capitalize" href="deleteDeportista/{$deportista->id_deportista}">borrar ↑</a>
                    </li>

                
                {/foreach}
            
            </ul>

                {if $rango}

                <div>
            
                    <form style="--bs-bg-opacity: .2;" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column" action="insertDeportista" method="post">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deportista</h4>
                        
                        <input type="text" name="nombre" placeholder="nombre">
                        <input type="text" name="apellido" placeholder="apellido">
                        <input type="number" name="edad" placeholder="edad">
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deportista</button>

                    </form>

                </div>

                <div>
                    <form action="insertDeporte" method="post" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deporte</h4>
                        
                        <input type="text" name="deporte">
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deporte</button>
                    </form>
                </div>

                <div>
                    <form action="deleteDeporte" method="post" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">

                        <h4 class="text-center pb-1 border-bottom">Eliminar Deporte</h4>
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Borrar Deporte</button>
                    </form>
                </div>
                {/if}

            </div>
        </div>
       </body>
        </html>