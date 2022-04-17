<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
        
    $mainData = new dataProcessor();

    if(isset($_POST['login'])) {
        if(isset($_POST['email']){
            if(isset($_POST['password']){
                $email =  $_POST['email'];
                $password =  $_POST['password'];
                if($mainData->login($email, $password)) {
                    header('Location: header.php'); 
                } else{
                    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                    header('Location: index-sign-innup.php');
                }
            }else{
                echo "<script>alert('Plaese enter password.')</script>";
            }
            
        } else{
            echo "<script>alert('Plaese enter email.')</script>";
        }
    } else{
        session_destroy();
        header('location: index-sign-innup.php');
    }       

?>