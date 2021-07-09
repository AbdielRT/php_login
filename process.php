<?php

// Table of registered users
// $users = [
//     [
//       "email" => "john@gmail.com",
//      // "password" => "$2y$10$aKxUXqLOTGXVz.Wur9ilnudNzN100CxCbLfCQoX1IF.PeouM3scXq"
//       "password" => '123'
//     ],
//     [
//       "email" => "tara@gmail.com",
//     //   "password" => "$2y$10$IpQd7QExNOBIW2ToEZHv9uLa4JexenTiS0ItbEbmzk.2wHPmjD7oW"
//       "password" => 'qwe'
//     ]
//     ];



// Check if login attemp via our login form
if(isset($_POST["login"])){
    if(!empty($_POST["user"]) && !empty($_POST["password"])){
        $loginUser = [
            "email" => $_POST['user'],
            "password" => $_POST['password']
        ];

        $contentRegister = file_get_contents('./pswd.json');
        $users = json_decode($contentRegister, true);


        if(!in_array($loginUser,$users)){
            header('Location:./index.php?status=error');
        } else {
            foreach($users as $registered){
                if($registered['email']==$loginUser['email'] && $registered['password']==$loginUser['password']){
                        header('Location:./dashboard.php?status=success');
                }
            }

        }           
    }
}