<?php

class Post extends Model
{
    public function all()
    {
        $this->sql = 'SELECT * FROM posts ORDER BY created_at DESC';

        return $this->query()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $this->sql = 'SELECT * FROM posts WHERE id = :id';

        $this->params = [
            ':id' => $id
        ];

        return $this->query()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($params)
    {
        $this->sql = 'INSERT INTO posts (title, content) VALUES (:title, :content)';
        $this->params = $params;

        return $this->query();
    }
}
