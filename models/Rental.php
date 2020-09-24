<?php

/**
 * Rental ClasS
 */
class Rental
{

	private $id;
	private $name;
	private $description;
	private $pdo;
    
    public function __construct()
    {
    	try {
    		$this->pdo = new Database;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }    
    }

    public function getAll()
    {
    	try {
            $strSql = "SELECT r.*, s.status as status, u.name as name FROM rentails r INNER JOIN statuses s ON s.id = r.status_id INNER JOIN users u ON u.id = r.user_id";
    		$query = $this->pdo->select($strSql);
    		return $query;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    } 
    }

    public function newRental($data)
    {
        try {
           
            $this->pdo->insert('rentails', $data);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM rentails WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('rentails', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('rentails', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
    public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(id) as id FROM rentails";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function saveMovieRental($arrayMovies, $lastIdRental)
    {
        try {
            foreach ($arrayMovies as $movie) {
                $data = [
                    'rental_id'  =>  $lastIdRental,
                    'movie_id'   =>  $movie["id"]
                ];

                $this->pdo->insert('movie_rental', $data);
            } 

            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }
}