<?php
    
    include("connection.php");
    class User extends Connection
    {   
        function __construct() {
            parent::__construct();
        }
        function existUser($username){
            $username = $this->_db->real_escape_string($username);
            $sqlUserExist = "SELECT username FROM user where username='$username' ";
            $result = $this->_db->query($sqlUserExist);
           
            if($result->num_rows>0){
                return true;
            }else{
                return false;
            }  
        }
        function insertUser($username,$password){
            $password=$this->_db->real_escape_string(md5($password));       
            $username = $this->_db->real_escape_string($username);
            $sqlInsertUser = "INSERT INTO user (username,pass)VALUES('$username','$password')";
            $result = $this->_db->query($sqlInsertUser);       
            if($result){
                return true;
            }else{
                return false;
            }  
        }
        function login($username,$password){
           
            $username = $this->_db->real_escape_string($username);
            $password=$this->_db->real_escape_string(md5($password)); 
            $sqlUserExist = "SELECT id,username FROM user where username='$username' AND pass = '$password'";
            $result = $this->_db->query($sqlUserExist); 
                   
            if($result->num_rows>0){
                    $row=mysqli_fetch_assoc($result);
                    $_SESSION["active"]=true;
                    $_SESSION["id_user"]=$row["id"];
                    $_SESSION["username"]=$row["username"];
                  
                     return true;       
            }else{
                return false;
            }     
        }
        function verifyPassword($currentPassword){
            $id = $_SESSION["id_user"];
            
            $password=$this->_db->real_escape_string(md5($currentPassword)); 

            $sqlUserExist = "SELECT username FROM user where id=$id and pass='$password'";
            $result = $this->_db->query($sqlUserExist);         
            if($result->num_rows>0){
                return true;
            }else{
                return false;
            }  
        }
        function changePassword($newPassword){
            $id = $_SESSION["id_user"];          
            $password=$this->_db->real_escape_string(md5($newPassword)); 
            $sqlUserExist = "UPDATE user SET pass = '$password'  where id=$id" ;
            $result = $this->_db->query($sqlUserExist);         
            if($result){
                return true;
            }else{
                return false;
            }  
        }
    }