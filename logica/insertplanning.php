<?php 
    require("statements.php");
    var_dump($_POST);
    insertPlanning($_POST["game"], $_POST["time"], $_POST["date"], $_POST["host"], $_POST["players"]);
?>