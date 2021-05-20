<?php 
    require("statements.php");

    insertPlanning($_POST["game"], $_POST["time"], $_POST["duration"], $_POST["date"], $_POST["host"], $_POST["players"]);
?>