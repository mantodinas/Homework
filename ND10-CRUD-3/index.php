<?php
include('./jasonData.php');

//EDIT
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) {
    $car = edit();
}

//CREATE
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
    store();
    header("location./");
}

//SELL
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['status'])) {
    sell();
    header("location./");
    die;
}

//DELETE
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['model'])) {
    destroy();
    header("location./");
    die;
}

//UPDATE
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
    update();
    header("location./");
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
    <title>CRUD-3-CARS-INDEX</title>
</head>

<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Car manufacturer</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="manufacturer" value="<?= (isset($car)) ? $car['manufacturer'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Car model</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?= (isset($car)) ? $car['model'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Year car manufactured</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="year" value="<?= (isset($car)) ? $car['year'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Car color</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="color" value="<?= (isset($car)) ? $car['color'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Car fuel</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="fuel" value="<?= (isset($car)) ? $car['fuel'] : "" ?>">
            </div>
        </div>

        <?php if (!isset($car)) {
            echo '<button class="btn btn-primary" type="submit">Ad Car</button>';
        }else {
            echo '<input type="hidden" name="id" value="' . $car['id'] . '"> <button class="btn btn-info" type="submit">Update car</button>';
        } ?>

    </form>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Car manufacturer</th>
            <th>Car model</th>
            <th>Year car manufactured</th>
            <th>Car color</th>
            <th>Car fuel</th>
            <th>update</th>
            <th>delete</th>
            <th>status</th>
        </tr>

        <?php foreach (getData() as $car) { ?>
           <tr>
               <td> <?=$car['id'] ?> </td>
               <td> <?=$car['manufacturer'] ?> </td>
               <td> <?=$car['model'] ?> </td>
               <td> <?=$car['year'] ?> </td>
               <td> <?=$car['color'] ?> </td>
               <td> <?=$car['fuel'] ?> </td>
               <td><a class="btn btn-success" href="?id=<?= $car['id'] ?>">update</a></td>
               <td>
                   <form action="" method="post">
                       <input type="hidden" name="id" value="<?= $car['id'] ?>">
                       <button class="btn btn-danger" type="submit">delete</button>
                   </form>
               </td>
               <td>
                    <?php if (!$car['status'] == 'sold') { ?>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $car['id'] ?>">
                            <input type="hidden" name="status" value="<?= $car['status'] ?>">
                            <button class="btn btn-warning" type="submint">sell</button>
                        </form>
                    <?php } else {
                        echo 'sold';
                    } ?>
                   }
               </td>
           </tr>
      <?php } ?>
    </table>
</body>
</html>