<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    $result = allePlanningen();
?>

<html>
    <div class="row">
        <?php 
            foreach($result as $array => $value) {
        ?>
        <div class="col-3 border mt-3 ml-3">
            <h1 class="text-center"><?php echo $value["game"]; ?></h1>
                <div>
                    <ul class="list-unstyled class text-center">
                        <li>Tijd: <?php echo $value["time"]; ?></li>
                        <li>Datum: <?php echo $value["date"]; ?></li>
                        <li>Host: <?php echo $value["host"]; ?></li>
                        <li>Spelers: <?php echo $value["players"]; ?></li>
                        <li>Tijd nodig: <?php echo $value["playtime"]; ?></li>
                    </ul>
                    <a class="btn btn-danger float-right ml-3" href="../logica/deleteconfirm.php?id=<?php echo $value["id"]; ?>">X</a>
                    <a class="btn btn-primary float-right mb-3" href="plan.php?id=<?php echo $value["id"]; ?>">meer info</a>
                </div>
        </div>
        <?php 
            }
        ?>
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>