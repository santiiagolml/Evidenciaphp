<?php

/**
 * Class MovieController
 */

require 'models/Movie.php';
require 'models/Status.php';
require 'models/User.php';
require 'models/Category.php';

class MovieController
{
    private $movie;
    private $users;
    private $status;
    private $category;

    public function __construct()
    {
        try{
        $this->movie = new Movie;
        $this->users = new User;
        $this->status = new Status;
        $this->category = new Category;
    }catch(PDOException $e){
        die($e->getMessage());
    }
    }

    public function index()
    {
    	$movies = $this->movie->getAll();
    	require 'views/layout.php';
    	require 'views/movies/list.php';
    }

    public function add()
    {
        $users = $this->users->getAll();
        $categories = $this->category->getAll();
        require 'views/layout.php';
        require 'views/movies/new.php';
    }

    public function save()
    {
       //Organizar en un array los datos de la tabla movie
       $dataMovie = [
        'nameM'         => $_POST['nameM'],
        'description'   => $_POST['description'],
        'user_id'       => $_POST['user_id'],
        'status_id'     => 1
     ];

     //Array de categorias
     $arrayCategories = isset($_POST['categories']) ? $_POST['categories'] : [];        

     if(!empty($arrayCategories)) {
        //Inserción de la Tabla Movie
        $respMovie = $this->movie->newMovie($dataMovie);

        //Obtener el ultimo ID registrado
        $lastIdMovie = $this->movie->getLastId();
        //Inserción de la Tabla category_movie
        $respCategoryMovie = $this->movie->saveCategoryMovie($arrayCategories, $lastIdMovie[0]->id);

     } else
        {
          $respMovie          = false;
          $respCategoryMovie  = false;            
        }

    $arrayResp = [];

    if($respMovie == true && $respCategoryMovie == true) {
        $arrayResp = [
            'success' => true,
            'message' => "Pelicula Creada"  
        ];
    } else {
        $arrayResp = [
            'error' => true,
            'message' => "Error Creando la Pelicula"  
        ];
    }

    echo json_encode($arrayResp);
    return;

    }

    public function edit()
    {
       if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];

        $data=$this->movie->getById($id);
        $users=$this->users->getAll();
        $statuses=$this->status->getAll();
        $categories = $this->category->getAll();            
        require 'views/layout.php';
        require 'views/movies/edit.php';
    }else{
        echo "Error, no se realizo.";
    }
    }


    public function update()
    {
        if(isset($_POST)) {
            $this->movie->editMovie($_POST);
            header('Location: ?controller=movie');
        } else {
            echo 'Error intentando actualizar una pelicula';            
        }
    }

    public function delete()
    {
        $this->movie->deleteMovie($_REQUEST);
        header('Location: ?controller=movie');
    }
}