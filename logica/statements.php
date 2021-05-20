<?php 
    require("connection.php");

    function alleSpellen() {
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM games");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;

        return $result;
    }

    function specifiekSpel() {
        $conn = dbConnect();
        $id = $_GET["id"];
        $stmt = $conn->prepare("SELECT * FROM games WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;

        return $result;
    }

    function allePlanningen() {
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM plannings");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;

        return $result;
    }

    function insertPlanning($game, $time, $date, $host, $players) {
        $conn = dbConnect();

        $stmt = $conn->prepare("INSERT INTO 
        plannings (game, time, date, host, players) 
        VALUES (:game, :time, :date, :host, :players)");

        $stmt->execute([':game' => $game,
        ':time' => $time, ':date' => $date,
        ':host' => $host, ':players' => $players]);
        
        $conn = null;
    }
?>