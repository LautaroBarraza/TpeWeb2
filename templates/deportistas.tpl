<!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>{$titulo}</h1>

            <ul>
            {foreach from=$deportistas item=$deportista}
            <li>Deporte: {$deportista->deporte} Deportista: <a href="Deportistas/{$deportista->id_deportista}">{$deportista->nombre}</a>,{$deportista->apellido}</li><a href="deleteTask/{$deportista->id_deportista}">borrar</a>
            {/foreach}
            <ul>
            {include file="./form.tpl" }
    
       </body>
        </html>