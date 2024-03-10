<?php
require_once "connection.php";
class Update extends Database {
    public function userUpdate( $column, $value, $id, $table) {
        $sql = "UPDATE $table SET $column = :value WHERE id = :id;";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id, ':value' => $value]);
        $result = $stmt->rowCount();
        return $result; 
    }
}
