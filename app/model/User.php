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
            $sql = 'SELECT * FROM user WHERE email = :email';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email',$this->email);
            $stmt->execute();

            if($stmt->rowCount()) {
                $result = $stmt->fetch();

                if($result["password"] === $this->password);{
                    $_SESSION['usr'] = array(
                        'id_user' =>$result['id'],'name_user'=>$result['name']
                    );

                    return true;
                }
                
            }
            
            throw new \Exception("Login Invalido");

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