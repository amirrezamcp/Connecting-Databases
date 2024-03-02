<?php
require_once "connection.php";
class Delete extends Database {
    public function userDelete($id, $table) {
        $sql = "DELETE FROM $table WHERE id = :id;";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        $result = $stmt->rowCount();
        return $result;
    }
}