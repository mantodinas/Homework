<?php

function connect()
{
    return = new mysqli("localhost","root","","nd11_medelynas");
}

function find($id){
    $conn = connect();
    $sql = "";
    $conn->query($sql);
    $conn->close();
}

function all(){
    $conn = connect();
    $sql = "";
    $conn->query($sql);
    $conn->close();
}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,'.$POST['name'].','.$POST['is_yearling'].','.$POST['quantity'].')';
    echo $sql;die;
    $conn->query($sql);
    $conn->close();
}




function update(){
    $conn = connect();
    $sql = "";
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "";
    $conn->query($sql);
    $conn->close();
}

?>