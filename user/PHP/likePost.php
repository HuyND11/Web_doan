<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
    include dirname(__DIR__)."/../PHP/creator.php";
    include dirname(__DIR__)."/../PHP/like.php";  

    if(isset($_POST)){
        $idPost = $_POST['idPost'];
        $idUser = $_POST['idUser'];
        $condition = [
            'idPost' => $idPost,
            'idUser' => $idUser
        ];

        $mainData = new dataProcessor();
        if($mainData->checkLike($condition)) {
            $mainData->delete("likes", $condition);
            
        } else {
            $mainData->addlikePost(creator::createLike($idPost, $idUser) );
        }
    }

?>