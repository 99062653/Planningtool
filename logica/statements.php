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

        $stmt = $conn->prepare("SELECT * FROM plannings ORDER BY date ASC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conn = null;

        return $result;
    }

    function insertPlanning($game, $time, $date, $host, $players, $playtime) {
        $conn = dbConnect();

        $stmt = $conn->prepare("INSERT INTO 
        plannings (game, time, date, host, players, playtime) 
        VALUES (:game, :time, :date, :host, :players, :playtime)");

        $stmt->execute([':game' => $game,
        ':time' => $time, ':date' => $date,
        ':host' => $host, ':players' => $players, ':playtime' => $playtime]);

        $conn = null;
        header("Location: ../index.php");
    }

    function deletePlanner($id) {
        $conn = dbConnect();

        $stmt = $conn->prepare("DELETE FROM plannings WHERE id = :id");
        $stmt->execute([':id' => $id]);

        $conn = null;
        header("Location: ../index.php");
    }

    function specifiekPlan() {
        $conn = dbConnect();

        $id = $_GET["id"];
        $stmt = $conn->prepare("SELECT * FROM plannings WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $conn = null;

        return $result;
    }

    function updatePlanning($id, $game, $time, $date, $host, $players, $playtime) {
        $conn = dbConnect();

        $stmt = $conn->prepare("UPDATE plannings
            SET game = :game,
                time = :time,
                date = :date,
                host = :host,
                players = :players,
                playtime = :playtime
            WHERE id = :id");

        $stmt->execute([
        ':id' => $id,
        ':game' => $game,
        ':time' => $time, ':date' => $date,
        ':host' => $host, ':players' => $players, ':playtime' => $playtime]);

        $conn = null;

        header("Location: ../paginas/plannings.php");
    }
?>