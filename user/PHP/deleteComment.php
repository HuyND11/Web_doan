<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
    
    $mainData = new dataProcessor();

    if(isset($_POST)) {
        $idPost = $_POST['idPost'];
        $idUser = $_POST['idUser'];
        $condition = [
            "idPost" => $idPost,
            "idUser" => $idUser
        ];

        $mainData->delete("comments", $condition);
    }

?>