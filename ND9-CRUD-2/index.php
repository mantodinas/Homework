<?php

include('./functions.php');
//fill form for edit
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    $athletes = edit();
}

//store
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    store();
    header("location:./");
    die;
}

//destroy
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['Name'])){
    destroy();
    header("location:./");
    die; 
}

//update    
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])  ){
    update();
    header("location:./");
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Olympics</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <form class="form" action="" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label " >Name</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="Name" value="<?= (isset($athletes))? $athletes['Name'] : "" ?>">
                </div>
             </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Surname</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="surname" value="<?= (isset($athletes))? $athletes['surname'] : "" ?>">
                </div>
             </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sport</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="sport" value="<?= (isset($athletes))? $athletes['sport'] : "" ?>">
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="country" value="<?= (isset($athletes))? $athletes['country'] : "" ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="gender" value="<?= (isset($athletes))? $athletes['gender'] : "" ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Victories</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="victories" value="<?= (isset($athletes))? $athletes['victories'] : "" ?>">
                </div>     
            </div>
            
        <?php if(!isset($athletes)){
                echo '<button class="btn btn-primary col-md-2" type="submit">New athlete</button>';
        }else{
                echo '
                <input type="hidden" name="id" value="'. $athletes['id'].' ">
                <button class="btn btn-info" type="submit">New athlete</button>';
        } ?>
        </form>

        <table class="table" style="color: white">
        <tr>
        <th>Id</th> 
        <th>Name</th> 
        <th>Surname</th> 
        <th>Sport</th> 
        <th>Country</th> 
        <th>Gender</th>
        <th>Victories</th> 
        </tr>

        <?php $count = 0; foreach ($_SESSION['olympics'] as $athletes) {  ?>
            <tr>
                <td> <?= ++$count."/".$athletes['id']  ?> </td>
                <td> <?= $athletes['Name']  ?> </td>
                <td> <?= $athletes['surname']  ?> </td>
                <td> <?= $athletes['sport']  ?> </td>
                <td> <?= $athletes['country']  ?> </td>
                <td> <?= $athletes['gender']  ?> </td>
                <td> <?= $athletes['victories']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $athletes['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$athletes['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
