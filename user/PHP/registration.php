<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
    $mainData = new dataProcessor();

    if(isset($_POST['register'])) {
        if(isset($_POST['emailRegitration'])) {
            $email = $_POST['emailRegitration'];
            if(!$mainData->checkAvailableEmail($email)){
                echo "<script>alert('Email is exist, Plaese user another Email. Thank you.')</script>";           
            } else{
                if(isset($_POST['password'])){
                    echo "password";
                    if(isset($_POST['comfirmPassword'])){
                        echo "comfirm password";
                        $password = $_POST['password'];
                        $comfirmPassword = $_POST['comfirmPassword'];
                        if($mainData->checkConfirmPassword($password, $comfirmPassword)){
                            echo "success";
                            $mainData->registration(creator::createUser());
                            $mainData->processSendEmail($email);
                            echo "<script>alert('Registration successfull. Plaese check your email');</script>";
                        } else{
                            echo "<script>alert('Please enter confirm password to match with password.')</script>";
                        }
                    } else {
                        echo "<script>alert('Plaese enter comfirm password.')</script>";
                    }
                } else {
                    echo "<script>alert('Plaese enter password.')</script>";
                }
            }
            
        }else{
                echo "<script>alert('No email.')</script>";
        }
    }

?>