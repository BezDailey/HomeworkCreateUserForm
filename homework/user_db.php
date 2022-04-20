<?php
    class UserDB {
        public static function create_user ($username, $password, $lastname, $firstname) {
            $db = DATABASE::getDB();
            $query = "Insert into user (username, password, lastname, firstname) VALUES (:username, :password, :lastname, :firstname)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":username", $username);
                $statement->bindValue(":password", $password);
                $statement->bindValue(":firstname", $firstname);
                $statement->bindValue(":lastname", $lastname);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                print($error);
            }
        }
    }
?>
