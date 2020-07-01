<?php
session_start();
require "users.php";
require "classes.php";
if(isset($_POST['sub']))
{
    $log = $_POST['log'];
    $pass = $_POST['pass'];
}

if (!empty($log)&&!empty($pass))
{
    for ($i = 0; $i < count($users); $i++)
    {   
        if (($log == $users[$i]['login']) && ($pass == $users[$i]['password']))
        {

            if ($users[$i]['role'] == 'admin'){
                $_SESSION['role'] = $users[$i]['role'];
                $_SESSION['name'] = $users[$i]['name'];
                $_SESSION['surname'] = $users[$i]['surname'];
                $_SESSION['lang'] = $users[$i]['lang'];         
                header('Location: Profiles\admin.php');

            }

            if ($users[$i]['role'] == 'manager'){
                $_SESSION['role'] = $users[$i]['role'];
                $_SESSION['name'] = $users[$i]['name'];
                $_SESSION['surname'] = $users[$i]['surname'];
                $_SESSION['lang'] = $users[$i]['lang'];    
                header('Location: Profiles\manager.php'); 
            }

            
            if ($users[$i]['role'] == 'client'){
                $_SESSION['role'] = $users[$i]['role'];
                $_SESSION['name'] = $users[$i]['name'];
                $_SESSION['surname'] = $users[$i]['surname'];
                $_SESSION['lang'] = $users[$i]['lang'];
                header('Location: Profiles\client.php'); 
            }

        }

        
    }
}
    else header('Location: index.php');
    ?>
