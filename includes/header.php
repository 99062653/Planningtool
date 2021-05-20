<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PlanningsTool</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-secondary">
        <h1 class="navbar-brand">PlanningsTool</h1>
        <ul class="navbar-nav nav-pills">  
        <?php 
            $actual_link = "$_SERVER[REQUEST_URI]";
            //echo $actual_link;
            if ($actual_link != "/blok3/Planningtool/index.php") {
        ?>
                <li class="nav-item mx-3"><a class="nav-link btn btn-secondary" data-toggle="pill" href="../index.php">Games</a></li>
                <li class="nav-item"><a class="nav-link btn btn-secondary active" data-toggle="pill" href="#">Plannen</a></li> 
             <?php 
            }else { 
                ?>
                <li class="nav-item mx-3"><a class="nav-link active btn btn-secondary" data-toggle="pill" href="#">Games</a></li>
                <li class="nav-item"><a class="nav-link btn btn-secondary" data-toggle="pill" href="paginas/plannings.php">Plannen</a></li>
                 
        <?php 
            }
            ?>
        </ul>
    </nav>
</body>
</html>