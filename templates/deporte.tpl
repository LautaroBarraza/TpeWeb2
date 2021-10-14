
{include file="head.tpl"}

        <body>
            <div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex ">
                <div class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
                    
                    <a class="p-2 rounded-3 border border-2 border-danger text-danger fw-bold text-center text-capitalize text-decoration-none" href="logOut">Log Out</a>
                    
                        <h1 class="text-capitalize">{$titulo}</h1>

                        <ul class="list-group">
                            {foreach from=$deportistas item=$deportista}
                                <li class="list-group-item text-capitalize">{$deportista->nombre} {$deportista->apellido}</li>
                                <li class="list-group-item">{$deportista->edad} años</li>
                            {/foreach}
                        <ul>
                </div>
            </div>
        </body>
    </html>