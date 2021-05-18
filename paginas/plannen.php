<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    //$resultAlles = alleSpellen();
    $result = specifiekSpel();
?>

<html>
    <div>
        <form class="text-center" action="plannenresult.php">
        <h2>Plan hier uw spel:</h2>
        <?php 
            if(isset($_GET["id"])) {
            ?>
                <input class="mb-3 mt-3" style="width: 200px;" type="text" name="game" required value="<?php echo htmlspecialchars($result["name"]); ?>"><br>
            <?php
            }else {
                ?>
                <input style="width: 200px;" type="text">
                <?php
            }
            ?>
            <input style="width: 200px;" type="time" name="times" required value="<?php echo $time;?>" placeholder="Vul hier de starttijd in"></p>
        </form> 
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>
