{include file="head.tpl"}


    <body>
        <div class="d-flex flex-column align-items-center justify-items-center align-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-100 bg-white">
            <h1>{$titulo}</h1>
            <ul class="d-flex flex-column w-100 list-group p-3">
            <li class="list-group-item">{$deportista->nombre} {$deportista->apellido}</li>
            <li class="list-group-item">{$deportista->edad}</li>
            <li class="list-group-item">{$deportista->deporte}</li>
            <li  id="id_deportista">{$deportista->id_deportista}</li> 
            <ul>
        </div>

        {include file="./vue/comentarios.tpl"}
    {if $logeado}
        {include file="./forms/formComentarioItem.tpl"}
    {/if}    
        <script src="../js/comentarios.js"></script>
    </body>