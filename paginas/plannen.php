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
                <input class="mb-3 mt-3" style="width: 230px;" type="text" name="game" required value="<?php echo htmlspecialchars($result["name"]); ?>"placeholder="vul hier de game in"><br>
            <?php
            }else {
                ?>
                <input class="mb-3 mt-3" style="width: 230px;" type="text" name="game" placeholder="vul hier de game in">
                <?php
            }
            ?>
            <input class="mb-3" style="width: 230px;" type="time" name="time" required value="<?php echo $time;?>" placeholder="Vul hier de starttijd in"><br>
            <input class="mb-3" style="width: 230px;" type="number" name="duration" required value="<?php echo $duration;?>" placeholder="Min. hoelang je wilt spelen"><br>
            <input class="mb-3" style="width: 230px;" type="date" required value="<?php echo $date;?>" placeholder="Vul hier de datum in"><br>
            <input class="mb-3" style="width: 230px;" type="text" name="host" required value="<?php echo $host;?>" placeholder="Vul hier de host in"><br>
            <textarea name="players" cols="30" rows="10" required value="<?php echo $players;?>" placeholder="Vul hier de spelers in"></textarea><br>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form> 
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>
