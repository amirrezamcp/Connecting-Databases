<?php
require_once 'connection.php';
class Insert extends Database {
    public function userInsert($firstName, $lastName, $email, $table) {
        $sql = "INSERT INTO $table (firstName, lastName, email) VALUES (:firstName, :lastName, :email)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email]);
        $result = $stmt->rowCount();
        return $result;
    }
}