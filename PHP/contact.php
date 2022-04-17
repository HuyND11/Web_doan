<?php

    class contact{
        private int $idContact;
        private string $fullName;
        private string $email;
        private string $subject;
        private string $content;
        private Date $date;

        public function __construct($idUser, $subject, $content) {
            $this->idContact = "";
            $this->idUser = $idUser;
            $this->subject = $subject;
            $this->content = $content;
        }

        public function castToArray() {
            return [
                'idContact' => $this->idContact,
                'idUser' => $this->idUser,
                'subject' => $this->subject,
                'content' => $this->content
            ];
        }

        public function getIdContact() {
            return $this->idContact;
        }

        public function setSubject($subject) {
            $this->subject = $subject;
        }

        public function getSubject() {
            return $this->subject;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getContent() {
            return $this->content;
        }
        
    }

?>