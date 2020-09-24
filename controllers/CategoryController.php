<?php

/**
 * Class CategoryController
 */

require 'models/Category.php';

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category;
    }

    public function index()
    {
    	$categories = $this->categoryModel->getAll();
    	require 'views/layout.php';
    	require 'views/categories/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/categories/new.php';
    }

    public function save()
    {
        $this->categoryModel->newCategory($_REQUEST);
        header('Location: ?controller=category');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $category = $this->categoryModel->getById($id);
            require 'views/layout.php';
            require 'views/categories/edit.php';
        } else {
            echo 'Error, Se requiere el id de la categoria';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->categoryModel->editCategory($_POST);
            header('Location: ?controller=category');
        } else {
            echo 'Error intentando actualizar una categoria';            
        }
    }

    public function delete()
    {
        $this->categoryModel->deleteCategory($_REQUEST);
        header('Location: ?controller=category');
    }
}