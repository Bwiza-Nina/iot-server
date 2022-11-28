<?php
class DatabaseConnection{
    private $host = 'localhost';
    private $user = 'benax_iot_root';
    private $password = 'Td(FAdeZ9xp3';
    private $database = 'benax_iot';

    pbulic function getConnection(){
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($connection->connect_error){
            die("Error failed to connect to MySQL: ".$connection->connect_error);
        }else{
            return $connection;
        }
    }

}
?>