<?php

    class creator {
        public static function createComment($idPost, $comment) {
            $idUser = 1;
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            return new comment($idUser, $idPost, $comment, date('d/m/Y'));
        }

        public static function createUser() {
            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            return new user($userName, $email, $password);
        }

        public static function createLike($idPost, $idUser) {
            return new like($idPost, $idUser);
        }

        public static function createWishList($idPhoto, $idUser) {
            return new wishList($idPhoto, $idUser);
        }

    }

?>

