<!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <a href="logOut">Log Out</a>
            <h1>{$titulo}</h1>

            <ul>
            {foreach from=$deportistas item=$deportista}
            <li>{$deportista->nombre},{$deportista->apellido}</li>
            <li>{$deportista->edad}</li>
            {/foreach}
            <ul>
    
       </body>
        </html>