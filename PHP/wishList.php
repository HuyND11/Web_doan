<?php

    class wishList {
        private string $idPhoto;
        private string $idUser;

        public function __construct($idPhoto, $idUser) {
            $this->idUser = $idUser;
            $this->idPhoto = $idPhoto;
        }

        function castToArray() {
            return [
                "idUser" => $this->idUser,
                "idPhoto" => $this->idPhoto
            ];
        }

        public function getIdPhoto() {
            return $this->idPhoto;
        }

        public function getIdUser() {
            return $this->idUser;
        }
    }

?>