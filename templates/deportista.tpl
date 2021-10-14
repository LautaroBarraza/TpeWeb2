{include file="head.tpl"}

    <body>
        <div class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
            <h1>{$titulo}</h1>
            <ul>
            <li>{$deportista->nombre},{$deportista->apellido}</li>
            <li>{$deportista->edad}</li>
            <li>{$deportista->deporte}</li>
            <ul>
        </div>
    </body>