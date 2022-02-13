<?php

namespace Model;

class User extends ActiveRecord
{
    public function getUser()
    {
        $query = 'SELECT * FROM usuarios';
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }

    public function getDeleteUser($id)
    {
        $query = 'SELECT * FROM usuarios WHERE id=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postDeleteUser($id)
    {
        $query = 'DELETE FROM usuarios WHERE id=' . $id;
        self::$db->query($query);
    }

    public function getEditUser($id)
    {
        $query = 'SELECT * FROM usuarios WHERE id=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postEditUser($id, $firstName, $lastName, $email, $gender, $city)
    {
        $query = 'UPDATE usuarios SET id=' . $id . ', first_name=' . $firstName . ', last_name=' . $lastName . ', email=' . $email . ', gender=' . $gender . ', city=' . $city;
    }
}
