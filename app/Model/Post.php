<?php

class Post extends Model
{
    public function all()
    {
        $this->sql = 'SELECT * FROM posts';

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
}
