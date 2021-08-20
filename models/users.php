<?php
require_once('/var/www/MVC/connection.php');
require_once('/var/www/MVC/models/model.php');

class User extends Model
{
    public function all()
    {
        $list = [];
        $req = $this->connection->query('SELECT * FROM users');
        foreach ($req->fetchAll() as $item) {
            $list[] = $this->setItems($item['id'], $item['full_name'], $item['email']);
        }
        return $list;
    }

    public function find($id)
    {
        $req = $this->connection->prepare('SELECT * FROM users WHERE id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return  $this->setItems($item['id'], $item['full_name'], $item['email']);
        }
        return null;
    }

    public function showUrl()
    {
        return 'http://abc.com';
    }

    private function setItems($id, $fullName, $email)
    {
        return [
            'id' => $id,
            'full_name' => $fullName,
            'email' => $email,
        ];
    }
}
