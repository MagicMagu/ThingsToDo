<?php
        require('app/config/db.php');
        class Homework_model{
                private $connection;
                function __construct(){
                        $this->connection = connection();
                }
                public function add($name, $list_id){
                        $query = "INSERT INTO homework (homeWork_name, list_id) VALUES ('$name', '$list_id')";
                        $add = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
                public function update($id, $name){
                        $query = "UPDATE homework SET homeWork_name = '$name' WHERE id = '$id'";
                        $update = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
                public function delete($id){
                        $query = "DELETE FROM homework WHERE id = '$id'";
                        $delete = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
        }
?>
