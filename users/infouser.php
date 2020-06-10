<?php 
$root = $_SERVER["DOCUMENT_ROOT"];
$redirect = $root . "/redirect.php";
include  $root. "/classes.php";
include  $root . "/database/Users.php";
foreach($USERS as $key=>$user)
{
    if($_SESSION['id'] == $key)
    {
       $name = $user['name'];
       $surname = $user['surname'];
       $role = $user['role'];
       switch($role){
           case 1:{
            $obj = new Client($name, $surname);
            break;
            }
           case 2:{
            $obj = new Manager($name, $surname);
            break;
            }
            case 3:{
            $obj = new Admin($name,$surname);
            break;
        }
       }
    }
}