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
                <div>
                    <form action="insertDeportista" method="post">
                        <input type="text" name="nombre" placeholder="nombre">
                        <input type="text" name="apellido" placeholder="apellido">
                        <input type="number" name="edad" placeholder="edad">
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button type="submit">Agregar Deportista</button>
                    </form>
                </div>
                <div>
                    <form action="insertDeporte" method="post">
                        <input type="text" name="deporte">
                        <button type="submit">Agregar Deporte</button>
                    </form>
                </div>
                <div>
                    <form action="deleteDeporte" method="post">
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button type="submit">borrar Deporte</button>
                    </form>
                </div>
                {/if}
    
       </body>
        </html>