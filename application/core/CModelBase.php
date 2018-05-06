<?php

include_once "application/config/DataBase.php";

class CModelBase
{
    protected $link = null;

    function __construct()
    {
        $this->link = new mysqli(
            ENGINE_DATABASE_HOST,
            ENGINE_DATABASE_LOGIN,
            ENGINE_DATABASE_PASSWORD,
            ENGINE_DATABASE_NAME
        );

        if ($this->link->connect_errno)
        {
            throw new Exception("Model connection error: {$this->link->connect_error}");
        }

        if (!$this->link->set_charset("utf8"))
        {
            throw new Exception("Model can't set encoding: {$this->link->error}");
        }

        $this->createTables();
    }

    private function createTables()
    {
        // Temporary tables creation.

        $users = "CREATE TABLE IF NOT EXISTS enrollee_db.users
        (
          id INT PRIMARY KEY AUTO_INCREMENT,
          email VARCHAR(64) UNIQUE NOT NULL,
          firstname VARCHAR(64) NOT NULL,
          lastname VARCHAR(64) NOT NULL,
          patronymic VARCHAR(64) NOT NULL,
          birthdate DATE NOT NULL,
          password CHAR(40) NOT NULL 
        );";

        $sessions = "CREATE TABLE IF NOT EXISTS enrollee_db.sessions
        (
          id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
          uiid INT NOT NULL,
          cookie CHAR(40) NOT NULL,
          stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
        
          FOREIGN KEY (uiid) REFERENCES users (id)
        );";

        $this->link->query($users);
        $this->link->query($sessions);
    }

    function __destruct()
    {
        $this->link->close();
        $this->link = null;
    }

    public function escape($s)
    {
        return $this->link->real_escape_string(trim(htmlspecialchars(trim($s))));
    }
}
