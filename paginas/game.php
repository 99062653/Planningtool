<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    $result = specifiekSpel();
?>

<html>
    <div>
        <h1 class=""><?php echo $result["name"];?></h1> 
        <?php 
            if($result["expansions"] != null) {
                ?>
                    <h2>expansions: ja</h2>
                <?php 
            }else {
                ?> 
                <h2>expansions: nee</h2>
                <?php
            }
        ?>
        <div class="">
            <a href="<?php echo $result["url"]; ?>"><img class="w-25 float-right" src="../img/<?php echo $result["image"]; ?>" alt="spel"></a>
            <?php echo $result["description"]; ?>
        </div>
        <div>
            <ul class="list-group-item list-group-item-dark w-25">
                <li class="list-group-item"><strong>Minimale spelers: <span class="float-right"><?php echo $result["min_players"]; ?></span></strong></li>
                <li class="list-group-item"><strong>Maximale spelers: <span class="float-right"><?php echo $result["max_players"]; ?></span></strong></li>
                <li class="list-group-item"><strong>Speel-tijd: <span class="float-right"><?php echo $result["play_minutes"]; ?></span></strong></li>
                <li class="list-group-item"><strong>Uitleg-tijd: <span class="float-right"><?php echo $result["explain_minutes"]; ?></span></strong></li>
                <li class="list-group-item"><strong>Skills: <span class="float-right"><?php echo $result["skills"]; ?></span></strong></li>
            </ul>
        </div>
        <div class="float-right position-absolute" style="top: 50em; left: 100em;">
            <a class="text-right btn btn-danger" href="plannen.php?id=<?php echo $result["id"]?>">plan deze game!</a>
        </div>
        <div class="mx-3 my-3">
            <?php echo $result["youtube"]; ?>
        </div>
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>
