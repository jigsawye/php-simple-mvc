<?php

class Contact extends Model
{
    public function create($params)
    {
        $this->sql = 'INSERT INTO contacts(name, email, message) VALUES(:name, :email, :message)';

        $this->params = $params;

        return $this->query();
    }
}
