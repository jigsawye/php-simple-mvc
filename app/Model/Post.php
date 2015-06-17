<?php

class Post extends Model
{
    public function all()
    {
        $this->sql = 'SELECT * FROM posts';

        return $this->query()->fetchAll(PDO::FETCH_ASSOC);
    }
}
