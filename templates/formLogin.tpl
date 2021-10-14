{include file="head.tpl"}
<div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex">

<form action="confirmLogin" method="POST" class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
    
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Nombre de usuario..." />
    <input type="password" name="password" placeholder="Contraseña..." />
    <button class="text-light w-50 p-2 border-0 rounded-1 bg-primary" type="submit">Iniciar sesion</button>
</form>    

</div>
{if $error != ''}
 <h1>{$error}</h1>
{/if}