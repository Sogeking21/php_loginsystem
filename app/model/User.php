<?php

    use Vitor\Database\Connection;

    class User
    {
        private $id;
        private $name;
        private $email;
        private $password;

        public function validateLogin()
        {
            $conn = Connection::getconn();
            var_dump($conn);

            //conectar  no db
             
            // selec user mesmo email
            //conferir senha
            //se tiver tudo ok  criar session tela dashboard
            // se tiver açgum erro redirecionar tela inicial
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setname($name){
            $this->name = $name;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getName(){
            return $this->name;
        }

        public function getPassword(){
            return $this->password;
        }

    }