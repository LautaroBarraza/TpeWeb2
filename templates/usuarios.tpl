{include file="./head.tpl"}

{include file="./nav.tpl"}

    <div class="container">
        <h1 class="justify-content-center">Usuarios</h1>
       <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $usuarios item=$usuario}
            <tr scope="row">
                <td>{$usuario->nombreUsuario}</td>
                {if $usuario->rol==1}
                <td>Administrador</td>
                <td><button type="submit" class="btn btn-light"><a href="quitarPermiso/{$usuario->id_usuarios}">Quitar permiso</a></button></td>
                
                   {else}
                    <td>Registrado</td>
                    <td><button type="submit" class="btn btn-light"><a href="darPermiso/{$usuario->id_usuarios}">Dar permiso</a></button></td>
                    {/if}
                <td><button type="submit" class="btn btn-light"><a href="deleteUsuario/{$usuario->id_usuarios}">Eliminar</a></button></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>