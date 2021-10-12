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
            <div>
                {if $nombreUsuario !=null}
                <h1>hola {$nombreUsuario}</h1>
                {else}
                <a href="login">login</a>
                {/if}
                <a href="logOut">Log Out</a>
            </div>

            <div>
                {foreach from=$deportes item=$deporte}
                        <a href='Deporte/{$deporte->deporte}'>{$deporte->deporte}</a>
                        {/foreach}
            </div>
            

            <ul>
            {foreach from=$deportistas item=$deportista}
            <li>Deporte: <a href="Deporte/{$deportista->deporte}">{$deportista->deporte}</a> Deportista: <a href="Deportistas/{$deportista->id_deportista}">{$deportista->nombre}</a>,{$deportista->apellido}</li><a href="deleteDeportista/{$deportista->id_deportista}">borrar</a>
            {/foreach}
            <ul>

                {if $rango}
                <form action="" method="post">
                    <input type="text" name="nombre">
                    <input type="text" name="apellido">
                    <input type="text" name="edad">
                    <select name="deporte" id="">
                        {foreach from=$deportes item=$deporte}
                        <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                        {/foreach}
                    </select>
                </form>
                {/if}
    
       </body>
        </html>