<?php

class LoginControler
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' =>true, 
        ]);
        $template = $twig->load('login.html');

        return $template->render();
    }
    public function check(){
        try{
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin();

        }catch(\Exception $e){
            header('location:http://localhost/php_loginsystem/');
        }
    }
}