<?php
init();
function init()
{
    if (!file_exists(("./"))) {
        file_put_contents("./data.txt", "[]");
        file_put_contents("./id.txt", 0);
    }
}
function stored()
{
    $data = getData();
    $car['id'] = newId();
    $car['manufacturer'] = $_POST['manufacturer'];
    $car['model'] = $_POST['model'];
    $car['year'] = $_POST['year'];
    $car['color'] = $_POST['color'];
    $car['fuel'] = $_POST['fuel'];
    $car['status'] = $_POST['status'];


    $data[] = $car;
    setData($data);
}
function getData()
{
    $info = json_decode(file_get_contents("./data.txt"), 1);
    foreach ($info as $entry) {
        $entry = (array)$entry;
    }
    return $info;
}
function setData($info)
{
    return file_put_contents("./data.txt", json_encode($info));
}
function newId()
{
    $id = (file_get_contents("./id.txt", 1));
    $id++;
    file_put_contents("./id.txt", $id);
    return $id;
}
function edit()
{
    foreach (getData() as $car) {
        if ($car['id'] == $_GET['id']) {
            
            return $car;
        }  
    }
}
function update()
{
    $data = getData();
    foreach ($data as $car) {
        if ($car['id'] == $_POST['id']) {
            $car['manufacturer'] == $_POST['manufacturer'];
            $car['model'] == $_POST['model'];
            $car['year'] == $_POST['year'];
            $car['color'] == $_POST['color'];
            $car['fuel'] == $_POST['fuel'];
            setData($data);
            return;           
        }
    }
}
function destroy()
{
    $data = getData();
    foreach ($data as $key => $car) {
        if ($car['id'] == $_POST['id']) {
            unset($data[$key]);
            setData($data);
            return;
        }        
    }
}
function sell()
{
    $data = getData();
    foreach ($data as $key => $car) {
        if ($car['id'] == $_POST['id']) {
            $car['status'] = 'sold';
            setData($data);
        }        
    }
}