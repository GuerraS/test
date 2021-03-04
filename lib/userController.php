<?php
session_start();
require ('userModel.php');
$objUser = new User;

$datauser =$_POST["array"];

switch ($datauser[0]) {
    case "verifSession":
        if(!empty($_SESSION["active"])){
         
           echo json_encode(true);
        }else{
            echo json_encode(false);
        }
        break;
    case "login":     
        $result = $objUser->login($datauser[1],$datauser[2]);
        echo json_encode($result);
        break;
    case "verifyExist":
        $result = $objUser->existUser($datauser[1]);
        echo json_encode($result);
        
        break;  
    case "insert":
        $result = $objUser->insertUser($datauser[1],$datauser[2]);
        echo json_encode($result);
        break;
    case "verifyPassword":
        $result = $objUser->verifyPassword($datauser[1]);
        echo json_encode($result);
        break;
    case "changePassword":
        $result = $objUser->changePassword($datauser[2]);
        echo json_encode($result);
        break;
    
   
}
// $response = $objUser->verifyUser($username);
// echo json_encode($response);


