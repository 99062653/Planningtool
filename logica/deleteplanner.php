<?php 
    require("statements.php");

    $urlid = $_POST["id"];
    deletePlanner($urlid);
    echo "Data verwerkt";
?>