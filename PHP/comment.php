<?php

    class comment{
        private string $idComment;
        private string $idUser;
        private string $idPost;
        private string $content;
        private string $dateComment;

        public function __construct($idUser, $idPost, $content,$dateComment) {
            $this->idComment = "";
            $this->idUser = $idUser;
            $this->idPost = $idPost;
            $this->content = $content;
            $this->dateComment = $dateComment;
        }

        function castToArray() {
            return [
                "idUser" => $this->idUser,
                "idPost" => $this->idPost,
                "content" => $this->content,
                "dateComment" => $this->dateComment,
            ];
        }

        public function getIdComment() {
            return $this->idComment;
        }

        public function setIdAccount($idAccount) {
            $this->idAccount = $idAccount;
        }

        public function getIdAccount() {
            return $this->idAccount;
        }

        public function setIdPots($idPhoto) {
            $this->idPost = $idPost;
        }

        public function getIdPost() {
            return $this->idPost;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getContent() {
            return $this->content;
        }

        public function setDateTime($dateTime) {
            $this->dateTime = $dateTime;
        }

        public function getDateTime() {
            return $this->dateTime;
        }
    }

?>