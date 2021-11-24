{literal}
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentarios sobre el jugador</h4>
            <ul class="list-group list-group-flush" id="listadoComentarios">
            <li v-for="comentario in comentarios">{{ comentario.comentario}}, Nota: {{comentario.nota}}, comentario publicado por: {{comentario.nombreUsuario}}
{/literal}                
            {if $rol==1}
                {literal}
                    <button v-on:click="borrarComentario(comentario.id_comentario)">borrar</button></li>
                {/literal}
            {/if}
{literal}   

            </ul>
        </div>
    </div>
{/literal}