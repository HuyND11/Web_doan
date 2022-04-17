<?php

    class like{
        private string $idLike;
        private string $idPost;
        private string $idUser;

        public function __construct( $idPost, $idUser) {
            $this->idLike = "";
            $this->idUser = $idUser;
            $this->idPost = $idPost;
        }

        function castToArray() {
            return [
                "idPost" => $this->idPost,
                "idUser" => $this->idUser
            ];
        }

        public function getIdLike() {
            return $this->idLike;
        }


        public function getIdPost() {
            return $this->idPost;
        }
    }

?>