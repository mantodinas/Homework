<?php

init();

function init()
{
    session_start();
    if( !isset( $_SESSION['olympics'])  ){
        $_SESSION['olympics'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['olympics'] as $athletes) {
        if($athletes['id'] == $_GET['id']){
           return $athletes;
        }
     }
}

function store(){
    $athletes['id'] = $_SESSION['id'];
    $athletes['Name'] = $_POST['Name'];
    $athletes['surname'] = $_POST['surname'];
    $athletes['sport'] = $_POST['sport'];
    $athletes['country'] = $_POST['country'];
    $athletes['gender'] = $_POST['gender'];
    $athletes['victories'] = $_POST['victories'];

    $_SESSION['id']++;
    
    $_SESSION['olympics'][] = $athletes;
}

function destroy(){
    foreach ($_SESSION['olympics'] as $key => $athletes) {
        if($athletes['id'] == $_POST['id']){
         unset($_SESSION['olympics'][$key]);
         return;
        }
    }
}

function update(){
    foreach ($_SESSION['olympics'] as &$athletes) {
        if($athletes['id'] == $_POST['id']){
         $athletes['Name'] = $_POST['Name'];
         $athletes['surname'] = $_POST['surname'];
         $athletes['sport'] = $_POST['sport'];
         $athletes['country'] = $_POST['country'];
         $athletes['gender'] = $_POST['gender'];
         $athletes['victories'] = $_POST['victories'];
            return;
        }  
    }
}

?>