<?php 

namespace App\Connections;
use PDO;
use PDOException;

class ConMYSql{
    public function conToMySql1() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'testus', '12345');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Fehler-Modus
        return $pdo;
    } catch (PDOException $e) {
        die("Datenbank-Verbindungsfehler: " . $e->getMessage());
    }
}

}

?>