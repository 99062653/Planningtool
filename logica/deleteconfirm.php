<?php 
    require("statements.php");
    include("../includes/header.php");
    $urlid = $_GET["id"];
?>

<html>
    <div class="text-center">
        <h1 class="mb-5">Confirm delete</h1>
        <form action="deleteplanner.php" method="POST">
            <button class="btn btn-danger" name="id" value="<?php echo $urlid; ?>" type="submit" >Delete</button>
            <a class="btn btn-success" href="../index.php">Don't delete</a>
        </form>
    </div>
</html>

<?php 
    include("../includes/footer.php");
?>