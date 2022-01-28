<?php
    namespace Controller;
    use MVC\Router;
    use Model\User;
    class UserController{
        public static function getUser(Router $router){
            $users = new User();
            $users->getUser();
            $router->render('home',['users'=>$users]);
        }
    }

?>