<?php
require_once('/var/www/MVC/connection.php');
require_once('/var/www/MVC/models/model.php');

class Post extends Model
{
    public function all()
    {
        $list = [];
        // $db = DB::getInstance();
        $req = $this->connection->query('SELECT * FROM posts');
        // var_dump($req->fetchAll());
        foreach ($req->fetchAll() as $item) {
            $list[] = $this->setItems($item['id'], $item['title'], $item['content']);
        }
        return $list;
    }

    public function find($id)
    {
        // die($id);
        $req = $this->connection->prepare('SELECT * FROM posts WHERE id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return  $this->setItems($item['id'], $item['title'], $item['contention']);
        }
        return null;
    }

    private function setItems($id, $title, $content)
    {
        return [
            'id' => $id,
            'title' => $title,
            'contention' => $content,
        ];
    }
}
