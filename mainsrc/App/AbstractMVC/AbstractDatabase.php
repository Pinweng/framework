<?php 

namespace App\App\AbstractMVC;
use PDO;

abstract class AbstractDatabase{

      // hands over pdo 
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    abstract function getTabel();
    abstract function getModel();


      // get one speziel user
    function getUser($userid) 
    {
        $table = $this->getTabel();
        $model = $this->getModel();
        if (!empty($this->pdo)) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE userid = :userid");
            $stmt->execute(['userid' => $userid]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, $model = $this->getModel());
            return $stmt->fetch(PDO::FETCH_CLASS); 
        }
        return null; 
    }

    function getUserByEmail($mail) 
    {
        $table = $this->getTabel();
        $model = $this->getModel();
        if (!empty($this->pdo)) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE mail = :mail");
            $stmt->execute(['mail' => $mail]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, $model = $this->getModel());
            return $stmt->fetch(PDO::FETCH_CLASS); 
        }
        return null; 
    }
}

?>