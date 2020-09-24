<?php

/**
 * Class RentalController
 */

require 'models/Rental.php';
require 'models/Movie.php';
require 'models/Status.php';
require 'models/User.php';

class RentalController
{
    private $rental;
    private $movie;
    private $status;
    private $user;

    public function __construct()
    {
        try{
        $this->rental = new Rental;
        $this->movie = new Movie;
        $this->status = new Status;
        $this->user = new User;
      }catch(PDOException $e){
        die($e->getMessage());
     }
    }

    public function index()
    {
    	$rentails = $this->rental->getAll();
    	require 'views/layout.php';
    	require 'views/rentails/list.php';
    }

    public function add()
    {
        $users = $this->user->getAll();
        $movies = $this->movie->getAll();
        require 'views/layout.php';
        require 'views/rentails/new.php';
    }

    public function save()
    {
        //Organizar en un array los datos de la tabla movie
        $dataRental = [
            'star_date'  => $_POST['star_date'],
            'end_date'   => $_POST['end_date'],
            'total'      => $_POST['total'],
            'user_id'    => $_POST['user_id'],
            'status_id'  => 1
        ];

        //Array de categorias
        $arrayMovies = isset($_POST['movies']) ? $_POST['movies'] : [];        

        if(!empty($arrayMovies)) {
            //Inserción de la Tabla Movie
            $respRental = $this->rental->newRental($dataRental);

            //Obtener el ultimo ID registrado
            $lastIdRental = $this->rental->getLastId();
            //Inserción de la Tabla category_movie
            $respMovieRental = $this->rental->saveMovieRental($arrayMovies, $lastIdRental[0]->id);

        } else {
            $respRental          = false;
            $respMovieRental  = false;            
        }

        $arrayResp = [];

        if($respRental == true && $respMovieRental == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Renta creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando renta"  
            ];
        }

        echo json_encode($arrayResp);
        return;
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $rental = $this->rental->getById($id);
            require 'views/layout.php';
            require 'views/rentails/edit.php';
        } else {
            echo 'Error, Se requiere el id de el alquiler';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->rental->editRental($_POST);
            header('Location: ?controller=rental');
        } else {
            echo 'Error intentando actualizar un alquiler';            
        }
    }

    public function delete()
    {
        $this->rental->deleteRental($_REQUEST);
        header('Location: ?controller=rental');
    }
}