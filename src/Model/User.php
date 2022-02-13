<?php
    namespace Model;
class User extends ActiveRecord{
    public function getUser(){
        $query='SELECT * FROM usuarios';
        $result=self::$db->query($query);
        if($result->num_rows>0){
            $valor=mysqli_fetch_all($result,MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }

    public function getDeleteUser($id){
        $query='SELECT * FROM usuarios WHERE id='.$id;
        $result=self::$db->query($query);
        if($result->num_rows>0){
            $valor=$result->fetch_assoc();
            return $valor;
        }
        return [];
    }
    /*
    public function getUpdateUser($id){
        $query='UPDATE usuarios SET '
    }*/

    public function postDeleteUser($id){
        $query='DELETE FROM usuarios WHERE id='.$id;
        self::$db->query($query);
    }

}
