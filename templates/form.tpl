            <form action="insert" method="post">
                <input type="text" name="titulo" id="titulo">
                <input type="text" name="descripcion" id="descripcion">
                <input type="number" name="prioridad" id="prioridad">
                <input type="checkbox" name="completada" id="completada">
                <input type="submit" value="enviar">
            </form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <button><a href="login">Tengo una cuenta</a> </button>
        <button>Crear una cuenta</button>
    </div>



    <form method="post">
        <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
        <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
        <button type="submit">Iniciar sesion</button>
    </form>    

    </body>
</html>