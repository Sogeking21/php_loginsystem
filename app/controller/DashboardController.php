<?php

class DashboardController
{
    public function index()
    {
        echo 'Logado com sucesso <a href="http://localhost/php_loginsystem/dashboard/logout">fazer logout</a>';
    }

    public function logout()
    {
        unset($_SESSION['usr']);
        session_destroy();

        header('location: http://localhost/php_loginsystem/');
    }
}
