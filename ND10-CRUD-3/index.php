<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND10-CRUD-3</title>
</head>
<body>
    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >id</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >manufacturer</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >model</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >year</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >color</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >distance</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <div class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >fuel</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" name="name" value="<?= (isset($cars))? $cars['name'] : "" ?>">
        </div>
    </div>

    <table class="table">
        <tr>
        <th>Id</th> 
        <th>mznufacturer</th> 
        <th>model</th> 
        <th>year</th> 
        <th>color</th> 
        <th>distance</th>
        <th>fuel</th> 
        </tr>
    </table>

    <div class="mb-3">
    <label for="carsForms" class="form-label">car</label>
    <input type="email" class="form-control" id="mznufacturer">
    <input type="email" class="form-control" id="model">
    <input type="email" class="form-control" id="year">
    <input type="email" class="form-control" id="color">
    <input type="email" class="form-control" id="distance">
    <input type="email" class="form-control" id="fuel">
    </div>
</body>
</html>