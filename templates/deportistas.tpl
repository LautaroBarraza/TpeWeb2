<!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                    <li>Deporte: <a href="Deporte/{$deportista->deporte}">{$deportista->deporte}</a> Deportista: <a href="Deportistas/{$deportista->id_deportista}">{$deportista->nombre}</a>,{$deportista->apellido}</li>
                    {if $rango}
                        <a href="deleteDeportista/{$deportista->id_deportista}">borrar</a>
                    {/if}
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
                    <form action="updateDeportista" method="post">
                        <select name="deportistaEdit" id="">
                            {foreach from=$deportistas item=$deportista}
                                <option value='{$deportista->id_deportista}'>{$deportista->apellido}</option>
                            {/foreach}
                        </select>
                        <input type="text" name="nombreEdit" id="" placeholder="actualice nombre de deportista">
                        <input type="text" name="apellidoEdit" placeholder="apellido">
                        <input type="number" name="edadEdit" placeholder="edad">
                        <select name="deporteEdit" id="">
                            {foreach from=$deportes item=$deporte}
                            <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <button type="submit">actualizar deportista</button>
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
                <div>
                    <form action="updateDeporte" method="post">
                        <select name="deporte" id="">
                            {foreach from=$deportes item=$deporte}
                                <option value='{$deporte->id_deporte}'>{$deporte->deporte}</option>
                            {/foreach}
                        </select>
                        <input type="text" name="deporteEditado" id="" placeholder="actualice nombre de deporte">
                        <button type="submit">actualizar Deporte</button>
                    </form>
                </div>
                {/if}
    
       </body>
        </html>