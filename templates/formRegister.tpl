
<h1>Register</h1>

<form action="confirmRegister" method="post">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <input type="password" name="verifypassword" placeholder="Vuelva a escribir su contraseña" />
    <button type="submit">Registrar usuario</button>
</form>
{if $error !=''}
<h1>{$error}</h1>
{/if}