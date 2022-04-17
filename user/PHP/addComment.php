<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
    include dirname(__DIR__)."/../PHP/creator.php";
    include dirname(__DIR__)."/../PHP/comment.php";

    $mainData = new dataProcessor;

    if(isset($_POST)) {
        $idPost = $_POST['idPost'];
        $content = $_POST['content'];
        $idUser = $_POST['idUser'];
        if(!empty($content)) {
            if($content !== "") {
                $mainData->addComment($idPost, creator::createComment($idPost, $content));
            }
            $emlement = 
            '
                <div class="--c--comment--content">
                    <div class="c__user_flexcoment">
                        <p>

                            <i class="fa fa-user-circle" aria-hidden="true"></i>

                        </p>
                        <div class="c__user_coment">
                            <p class="c__user_coment" name="nameuser"></p>

                            <p class="--c--conten--date" name="date"</p>
                            <p class="--c--content--detail" name="content-user">'. $content .'</p>

                        </div>
                    </div>
                    <p class="c__delete_coment" onclick = "deleteComment('. $idPost . "," . $idUser .')">Delete</p>
                </div>
            ';
            echo $emlement;
        }
        
    }

?>