<?php

//plants. id, name, is_yearling, quantity 


include('./DB.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['action'] == 'create'){
        store();
        header("location:./");
        die;
    }
    
    if ($_POST['action'] == 'update'){
        store();
        header("location:./");
        die;
    }

    if ($_POST['action'] == 'destroy'){
        store();
        header("location:./");
        die;
    }
}

$action ='create';

if (isset($_GET['action'])){
    $plant = find($_GET['action']);
    $action = 'update';
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
    <title>Medelynas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form class="form" action="" method="POST">
        <input type="hidden" name="action" value="<?=$action?>">
        <div class="from-group row">
            <label class="col-sm-2 col-form-lable">Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="Name" value="<?= (isset($plant))? $plant['Name'] : "" ?>">
            </div>
        </div>
        <div class="from-group row">
            <label class="col-sm-2 col-form-lable">is_yearling</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="is_yearling" value="<?= (isset($plant))? $plant['is_yearling'] : "" ?>">
            </div>
        </div>
        <div class="from-group row">
            <label class="col-sm-2 col-form-lable">quantity</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="quantity" value="<?= (isset($plant))? $plant['quantity'] : "" ?>">
            </div>
        </div>

            <?php if (!isset($plant)) {
            echo '<button class="btn btn-primary col-md-2" type="submit">New plant</button>';
        }else {
            echo '<input type="hidden" name="id" value="' . $plant['id'] . '"> 
            <button class="btn btn-info" type="submit">Update plant</button>';
        } ?>
    </form>

    <table class="table" style="color: white">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>is_yearling</th>
            <th>quantity</th>
        </tr>

        <?php foreach (getData() as $plant) { ?>
            <tr>
                <td> <?=$plant['id'] ?> </td>
                <td> <?=$plant['Name'] ?> </td>
                <td> <?=$plant['is_yearling'] ?> </td>
                <td> <?=$plant['quantity'] ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $plant['id'] ?>">update</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $plant['id'] ?>">
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <?php if (!$plant['status'] == 'sold') { ?>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $plant['id'] ?>">
                            <input type="hidden" name="status" value="<?= $plant['status'] ?>">
                            <button class="btn btn-warning" type="submit">sell</button>
                        </form>
                        <?php } else {
                            echo 'sold';
                        } ?>
               </td>
            </tr>
        <?php  } ?>
    </table>

</body>
</html>