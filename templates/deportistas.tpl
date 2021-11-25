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

            <ul class="w-100 list-group align-items-center p-3">

                {foreach from=$deportistas item=$deportista}
                
                    <li class="mb-3 d-flex w-75 flex-column justify-content-center border border-1 rounded-3 list-group-item ">
                        Deporte: 
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deporte/{$deportista->deporte}">{$deportista->deporte}</a> 
                        Deportista:
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deportistas/{$deportista->id_deportista}">{$deportista->nombre} {$deportista->apellido}</a>

                    {if $logeado}

                        <a style="--bs-bg-opacity: .4;" class="text-center rounded list-group-item bg-danger border-0 mt-1 text-decoration-none text-black text-capitalize" href="deleteDeportista/{$deportista->id_deportista}">borrar ↑</a>
                        <div class="alert alert-warning"><p>ALERTA: Si borras un deportista borraras los comentarios publicados acerca del mismo</p></div>
                    {/if}

                    </li>

                
                {/foreach}
            
            </ul>

                {if $logeado}

                {include file="./forms/formInsertDeportista.tpl"}
                {include file="./forms/formInsertDeporte.tpl"}
                {include file="./forms/formEditDeportista.tpl"}
                {include file="./forms/formDeleteDeporte.tpl"}
                <div class="alert alert-warning"><p>ALERTA: Si borras un deporte borraras los deportistas y comentarios publicados del mismo</p></div>
               
                {include file="./forms/formEditDeporte.tpl"}
                {/if}

                {if $rol}
                    <a href="showUsers">Usuarios</a>
                {/if}

            </div>
        </div>
    </body>
</html>