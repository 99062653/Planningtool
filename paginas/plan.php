<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    $result = specifiekPlan();
?>

<html>
    <div>
        <h1 class="text-center">Spel: <?php echo $result["game"]; ?></h1>
        <div>
            <ul class="mx-auto my-auto list-group w-50">
                <li class="list-group-item">Host: <span><?php echo $result["host"]; ?></span></li>
                <li class="list-group-item">Spelers: <span><?php echo $result["players"]; ?></span></li>
                <li class="list-group-item">Tijd: <span><?php echo $result["time"]; ?></span></li>
                <li class="list-group-item">Datum: <span><?php echo $result["date"]; ?></span></li>
                <li class="list-group-item">Tijd nodig: <span><?php echo $result["playtime"]; ?> minuten</span></li>
            </ul>
                <div class="mx-auto w-50">
                    <a class="btn btn-primary" href="plannings.php">Terug</a>
                    <a class="btn btn-success ml-3" href="changeplanning.php?id=<?php echo $result["id"]; ?>">edit</a>
                </div>
        </div>
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>