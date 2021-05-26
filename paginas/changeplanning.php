<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    $result = specifiekPlan();
    $playtimemin = $result["play_minutes"];
    $explainmin = $result["explain_minutes"];
    $playtime = $playtimemin + $explainmin;
?>

<html>
    <div>
        <form class="text-center" action="../logica/updateplanning.php" method="POST">
            <h2>Edit hier uw spel:</h2>
                <input class="mb-3 mt-3" style="width: 230px;" value="<?php echo $result['game']; ?>" type="text" name="game" placeholder="vul hier de game in"><br>
                <input style="display: none;" name="playtime" type="text" value="<?php echo $result['playtime'] ?>">
                <input style="display: none;" name="id" type="text" value="<?php echo $result['id']; ?>">
                <input class="mb-3" style="width: 230px;" type="time" name="time" value="<?php echo $result['time'];?>"><br>
                <input class="mb-3" style="width: 230px;" type="date" name="date" value="<?php echo $result['date'];?>" placeholder="vul hier de datum in"><br>
                <input class="mb-3" style="width: 230px;" type="text" name="host" value="<?php echo $result['host'];?>" placeholder="Vul hier de host in"><br>
                <textarea class="mb-3" style="width: 230px; height: 150px;" name="players" placeholder="Vul hier de spelers in"><?php echo $result['players'];?></textarea><br>
                <input class="btn btn-primary" type="submit" value="Submit">
        </form> 
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>