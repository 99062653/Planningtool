<?php
    function dbConnect() {
        $servername = "localhost";
        $username = "adminuser";
        $password = "abXVBq5ZYoMYBXnd";
        $dbname = "planningstool";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            //echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }

    
?>