<?php

namespace Controller;

use MVC\Router;
use Model\User;

class UserController
{
    public static function getUser(Router $router)
    {
        $users = new User();
        $usuarios = $users->getUser();
        $router->render('home', ['users' => $usuarios]);
    }
    public static function getDeleteUser(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $users = new User();
        $usuarios = $users->getDeleteUser($id);
        $router->render('delete', ['users' => $usuarios]);
    }

    public static function postDeleteUser(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $users = new User();
        $users->postDeleteUser($id);
        $router->redirect('/');
    }
    public static function postUser(Router $router)
    {
        $user = new User($_POST);
        $user->postUser();
        self::getUser($router);
    }


    public static function getEditUser(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $users = new User();
        $usuarios = $users->getEditUser($id);
        $router->render('edit', ['users' => $usuarios]);
    }

    public static function postEditUser(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $firstName = $_POST['first_name'] ?? null;
        $lastName = $_POST['last_name'] ?? null;
        $email = $_POST['email'] ?? null;
        $gender = $_POST['gender'] ?? null;
        $city = $_POST['city'] ?? null;
        $users = new User();
        $users->postEditUser($id, $firstName, $lastName, $email, $gender, $city);
        $router->redirect('/');
    }
}
