<?php

    class photo{
        private string $idPhoto;
        private string $idCategory;
        private string $idPost;
        private string $linkImage;

        public function __construct($idCategory, $idPost, $linkImage){
            $this->idPhoto = "";
            $this->idCategory = $idCategory;
            $this->idPost = $idPost;
            $this->linkImage = $linkImage;
        }

        function castToArray() {
            return [
                "idPhoto" => $this->idPhoto,
                "idCategory" => $this->idCategory,
                "idPost" => $this->idPost,
                "linkImage" => $this->linkImage
            ]
        }

        public function getIdphoto() {
            return $this->idPhoto;
        }

        public function setLinkImage($linkImage) {
            $this->linkImage = $linkImage;
        }

        public function getLinkImage() {
            return $this->linkImage;
        }

    }

?>