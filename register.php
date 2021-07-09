<?php

if(isset($_POST["signin"])){
    if(!empty($_POST["signUpUser"]) && !empty($_POST["signUpPassword"])){
        $newUser = [
            "email" => $_POST['signUpUser'],
            "password" => $_POST['signUpPassword']
        ];

        $contentRegister = file_get_contents('./pswd.json');
        $users = json_decode($contentRegister, true);

        array_push($users, $newUser);

        file_put_contents('./pswd.json',json_encode($users));
        
        header('Location:index.php?status=registered');
    } else {
        header('Location:index.php?status=error');    
    } 
} else {
    header('Location:index.php');
}