<?php

/**
 * Class UserController
 */

require 'models/User.php';
require 'models/Status.php';
require 'models/Rol.php';


class UserController
{
    private $user;
    private $status;
    private $rol;

    public function __construct()
    {
        $this->user = new User;
        $this->status = new Status;
        $this->rol = new Rol;
    }

    public function index()
    {
    	$users = $this->user->getAll();
    	require 'views/layout.php';
    	require 'views/user/list.php';
    }

    public function add()
    {
        $roles = $this->rol->getAll();
        require 'views/layout.php';
        require 'views/user/new.php';
    }

    public function save()
    {
        $this->user->newUser($_REQUEST);
        header('Location: ?controller=user');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $data = $this->user->getById($id);
            $statuses = $this->status->getCustomStatuses('Usuario');
			$roles = $this->rol->getAll();
            require 'views/layout.php';
            require 'views/user/edit.php';
        } else {
            echo 'Error, no se realizo';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->user->editUser($_POST);
            header('Location: ?controller=user');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->user->deleteUser($_REQUEST);
        header('Location: ?controller=user');
    }
}