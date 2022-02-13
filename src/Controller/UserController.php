<?php
    namespace Controller;
    use MVC\Router;
    use Model\User;
    class UserController{
        public static function getUser(Router $router){
            $users = new User();
            $usuarios=$users->getUser();
            $router->render('home',['users'=>$usuarios]);
        }

        public static function getDeleteUser(Router $router){
            $id = $_GET['id']??null;
            $users = new User();
            $usuarios=$users->getDeleteUser($id);
            $router->render('delete',['users'=>$usuarios]);
        }

        public static function getUpdateUser(Router $router){
            $id = $_GET['id']??null;
            $users = new User();
            $usuarios=$users->getUpdateUser($id);
            $router->render('update',['users'=>$usuarios]);
        }
    }
