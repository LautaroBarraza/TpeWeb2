<?php

$model;
$view;
class TaskController{
    function __construct(){
        $this->model= new TaskModel();
        $this->view = new TaskView();
    }


    function showHome(){
        $deportistas= $this->model->getDeportistasConDeporte();
        $this->view->showTasks($deportistas);
    }

    function showDeportista($deportista){
        $deportista = $this->model->getDeportista($deportista);
        $this->view->showUnDeportista($deportista);
    }
    
    
    
    
    /*function createTask(){
        if (isset($_POST['completada'])){
            $completada=1;
        }else{
            $completada=0;
        };
        $this->model->insertTask($_POST['titulo'], $_POST['descripcion'], $_POST['prioridad'], $completada);
        header("Location: ".BASE_URL."home");
    
    
    }
    function borrarTarea($id_task){
        $this->model->deleteTask($id_task);
        header("Location: ".BASE_URL."home");
    
    }
*/

}