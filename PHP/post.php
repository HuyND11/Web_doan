<?php

    class post{
        private int $idPost;
        private string $title;
        private string $description;
        private string $location; 

        function __construct($title, $description, $location) {
            $this->idPost = "";
            $this->title = $title;
            $this->description = $description;
            $this->location = $location;
        }

        function castToArray() {
            return [
                "idPost" => $this->idPost,
                "idCatitletegory" => $this->title,
                "description" => $this->description,
                "location" => $this->location
            ]
        }

        function getIdPost() {
            return $this->idPost;
        }

        function setTitle($title) {
            $this->title = $title;
        }

        function getTitle() {
            return $this->title;
        }

        function setDescriptione($description) {
            $this->description = $description;
        }

        function getDescriptione() {
            return $this->description;
        }

        function setLocation($location) {
            $this->location = $location;
        }

        function getLocation() {
            return $this->location;
        }
    }



?>