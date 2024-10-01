<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{
    private function generateRandomString($length = 10)
    {
        return bin2hex(random_bytes($length / 2));
    }

    public function mahoaID($id)
    {
        $randomString = $this->generateRandomString(10);
        return base64_encode($id . ':' . $randomString);
    }

    public function giaimaID($encryptedId)
    {
        $decoded = base64_decode($encryptedId);
        return explode(':', $decoded)[0];
    }

    public function findUserById($id)
    {
        $decryptedId = $this->giaimaID($id);
        $sql = 'SELECT * FROM users WHERE id = ' . intval($decryptedId);
        $user = $this->select($sql);

        return $user;
    }


    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE "%' . $keyword . '%" OR user_email LIKE "%' . $keyword . '%"';
        $user = $this->select($sql);

        return $user;
    }

    public function auth($userName, $password)
    {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '" AND password = "' . $md5Password . '"';

        $user = $this->select($sql);
        return $user;
    }

    public function deleteUserById($id)
    {
        $decryptedId = $this->giaimaID($id);
        $sql = 'DELETE FROM users WHERE id = ' . intval($decryptedId);
        return $this->delete($sql);
    }


    public function updateUser($input)
    {
        $decryptedId = $this->giaimaID($input['id']);

        $sql = 'UPDATE users SET 
             name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) . '", 
             password="' . md5($input['password']) . '"
            WHERE id = ' . intval($decryptedId);

        $user = $this->update($sql);

        return $user;
    }


    public function insertUser($input)
    {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
            "'" . mysqli_real_escape_string(self::$_connection, $input['name']) . "', '" . md5($input['password']) . "')";

        $user = $this->insert($sql);

        return $user;
    }

    public function getUsers($params = [])
    {
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] . '%"';
            $users = $this->query($sql);
        } else {
            $sql = 'SELECT * FROM users';
            $users = $this->select($sql);
        }

        return $users;
    }
}