"use strict"

const API_URL = "http://localhost/web2/TPEWEB2/api/comentarios";

let app = new Vue({
    el: "#listadoComentarios",
    data: {
        comentarios:[],
        
    },
    methods: {
        borrarComentario:
        async function borrarComentario(id){
        console.log(id)
        try{
            let res = await fetch (API_URL+"/"+id, {
                "method" : "delete"
            })
            if (res.ok){
                getComentarios();
            }
            console.log(res)
        }   catch (error) {
            console.log(error);
        }
    }
    }
})


async function getComentarios(){
    try{
        let response = await fetch(API_URL);
        let comentarios = await response.json();
        getComentarioEspecifico(comentarios);
        

    } catch(e){
        console.log(e);
    }
}

getComentarios();

function getComentarioEspecifico(comentarios){


    let aux= [];
    let id= document.querySelector("#id_deportista").innerHTML;

    comentarios.forEach(i => {
        if(i.id_deportista==id){
            aux.push(i)
        }
    });
    app.comentarios= aux;

    console.log(aux);
}

    let btnAgregar = document.querySelector("#btn-agregar-comentario")
    btnAgregar.addEventListener("click", (e)=> {
        e.preventDefault();
        agregarComentario();
    })


async function agregarComentario(){
    let id_deportista = document.querySelector("#id_deportista").textContent;
    let texto_comentario = document.querySelector("#comentario").value;
    let select_notas = document.querySelector("#nota-jugador");
    let nombreUsuario= document.querySelector("#nombreUsuario");
    console.log(nombreUsuario.innerHTML);


    let comentario = {
        "comentario": texto_comentario,
        "nota": select_notas.value,
        "id_deportista": id_deportista,
        "nombreUsuario": nombreUsuario.innerHTML
    }

    try{
        let res = await fetch(API_URL, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(comentario)
        });
        
        if (res.ok){
            getComentarios();
        }
        
    }catch (error){
        console.log(error);
    }
}