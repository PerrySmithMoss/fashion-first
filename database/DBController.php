<?php


class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "fashion-first";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Connection Failed" . $this->con->connect_error;
        }
        echo "Connection Successful....";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // For MySQLi closing connection
    protected function closeConnection() {
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
