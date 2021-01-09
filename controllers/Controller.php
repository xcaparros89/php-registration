<?php

namespace app\controllers;

// use app\models\Product;
// use app\Router;

class Controller
{
    public function index()
    {
        include __DIR__ . "/views/pages/index.php";
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }
        include __DIR__ . "/views/pages/login.php";
    }
    public function signup(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }
        include __DIR__ . "/views/pages/signup.php";
    }
    public function personal(){
        include __DIR__ . "/views/pages/personal.php";
    }

    public function logout()
    {
        session_start();

        if (isset($_SESSION['user_id'])) {
            unset($_SESSION['user_id']);
        }
        header("Location: login");
        exit;
    }
}
