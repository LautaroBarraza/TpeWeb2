{include file="head.tpl"}

<div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex">
<form class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white" action="confirmRegister" method="POST">
    <h1>Register</h1>
    <input type="text" name="username" placeholder="Nombre de usuario..." />
    <input type="password" name="password" placeholder="Contraseña..." />
    <input type="password" name="verifypassword" placeholder="Repetir contraseña..." />
    <button type="submit" class="text-light p-2 border-0 rounded-1 bg-primary">Registrar usuario</button>
</form>
</div>
{if $error !=''}
<h1>{$error}</h1>
{/if}