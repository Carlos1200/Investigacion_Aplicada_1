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
        
        public static function postDeleteUser(Router $router){
            $id = $_POST['id']??null;
            $users = new User();
            $users->postDeleteUser($id);
            $router->redirect('/');
        }
    }

?>