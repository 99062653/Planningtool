<?php 
    require("logica/statements.php");
    include("includes/header.php");
    $result = alleSpellen();
    //dankjewel https://www.youtube.com/watch?v=j-Oqg72_XZA
?>

<html>
    <div class="row">
    <?php 
        foreach($result as $array => $value) {
    ?>
        <div class="col-4 mb-5">
            <img class="w-100" src="img/<?php echo $value["image"]; ?>" alt="spel">
            <h1><?php echo $value["name"]; ?></h1>
            <p class="w-75"><?php echo $value["description"]; ?></p>
            <a class="btn btn-secondary float-right" href="paginas/game.php?id=<?php echo $value["id"]; ?>">Meer infomatie.</a>
        </div>
        <?php
        }
        ?>
    </div>
</html>

<?php 
    include("includes/footer.php");
?>
