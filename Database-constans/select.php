<?php
require_once "connection.php";
class Select extends Database {
    public function userSelect($id, $table) {
        $sql = "SELECT * FROM $table WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        $records = $stmt->fetchAll(PDO::FETCH_OBJ);
        var_dump($records);
        return $records;
    }
}