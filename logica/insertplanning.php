<?php 
    require("statements.php");
    
    insertPlanning($_POST["game"], $_POST["time"], $_POST["date"], $_POST["host"], $_POST["players"], $_POST["playtime"]);
    echo "Data verwerkt.";
    header("../plannings.php")
?>