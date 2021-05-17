<?php 
    require("../logica/statements.php");
    include("../includes/header.php");
    $result = specifiekSpel();
?>

<html>
    <div>
        <h1 class=""><?php echo $result["name"]; ?></h1> 
        <div class="">
            <img class="w-25 float-right" src="../img/<?php echo $result["image"]; ?>" alt="spel">
            <?php echo $result["description"]; ?>
        </div>
        <div>
            
        </div>
        <div class="float-right position-absolute" style="top: 50em; left: 100em;">
            <a class="text-right btn btn-danger" href="plannen.php?id=<?php echo $result["id"]?>">plan deze game!</a>
        </div>
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>
