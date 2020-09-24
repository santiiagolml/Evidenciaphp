<?php

/**
 * Class Database
 */
class Database extends PDO
{

	private $driver 		= 'mysql';
	private $host			= 'localhost';
	private $dbName			= 'examplePDO';
	private $charset		= 'utf8';
	private $user			= 'root';
	private $password		= '';	
    
    public function __construct()
    {
    	try {
    		parent::__construct("{$this->driver}:host={$this->host}; dbname={$this->dbName}; charset={$this->charset}", $this->user, $this->password);
    		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch (PDOException $e) {
	    	echo "Conexión Fallida {$e->getMessage()}";
	    }    
    }

    // configuracion de metodos para la CRUD

    /*
    ** Metodo Estandar para consultas en el proyecto.
    */
    public function select($strSql, $arrayData = array(), $fetchMode = PDO::FETCH_OBJ)
    {
    	$query = $this->prepare($strSql);

    	foreach ($arrayData as $key => $value)
    		$query->bindParam(":$key",$value);
    	
    	if( !$query->execute() ) {
    		echo "Error, la consulta no se realizó";
    	} else {
    		return $query->fetchAll($fetchMode);
    	}
    }

    /*
    ** Metodo Estandar para inserciones del proyecto.
    */
    public function insert($table, $data)
    {
        try {
            //ordernar el array datos
            ksort($data);
            //Eliminar del array de datos los indices del request
            unset($data['controller'], $data['method']);

            $fieldNames = implode('`, `', array_keys($data));
            $fieldValues = ':' .implode(', :', array_keys($data));
            $strSql = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

            foreach ($data as $key => $value) {
                $strSql->bindValue(":$key", $value);
            }

            $strSql->execute();

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    /*
    ** Metodo Estandar para actualizaciones del proyecto.
    */
    public function update($table, $data, $where)
    {
        try {
            //ordernar el array datos
            ksort($data);
            $fieldDetails = null;

            foreach ($data as $key => $value) {
                $fieldDetails .= "`$key` = :$key,";
            }
            $fieldDetails = rtrim($fieldDetails, ',');

            $strSql = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

            foreach ($data as $key => $value) {
                 $strSql->bindValue(":$key", $value);
            }

            $strSql->execute();

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    /*
    ** Metodo Estandar para eliminar registros del proyecto.
    */
    public function delete($table, $where)
    {
        try {
            return $this->exec("DELETE FROM $table WHERE $where");
        } catch(PDOException $e) {
            die($e->getMessage());
        } 
    }

}