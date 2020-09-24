<?php

/**
 * Class RolController
 */

require 'models/Rol.php';

class RolController
{
    private $rolModel;

    public function __construct()
    {
        $this->rolModel = new Rol;
    }

    public function index()
    {
    	$roles = $this->rolModel->getAll();
    	require 'views/layout.php';
    	require 'views/roles/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/roles/new.php';
    }

    public function save()
    {
        $this->rolModel->newRol($_REQUEST);
        header('Location: ?controller=rol');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $rol = $this->rolModel->getById($id);
            require 'views/layout.php';
            require 'views/roles/edit.php';
        } else {
            echo 'Error, Se requiere el id de el rol';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->rolModel->editRol($_POST);
            header('Location: ?controller=rol');
        } else {
            echo 'Error intentando actualizar un rol';            
        }
    }

    public function delete()
    {
        $this->rolModel->deleteRol($_REQUEST);
        header('Location: ?controller=rol');
    }
}