<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1>Register</h1>

<form action="confirmRegister" method="POST">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <input type="password" name="verifypassword" placeholder="Vuelva a escribir su contraseña" />
    <button type="submit">Registrar usuario</button>
</form>
{if $error !=''}
<h1>{$error}</h1>
{/if}