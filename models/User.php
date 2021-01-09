<?php

namespace app\models;

class User
{
    public ?int $id;
    public string $name;
    public string $password;
    public string $email;
    public array $imageFile;
    public ?string $imagePath;
    public array $errors = [];

    public function loadData($data)
    {
        foreach ($data as $key=>$value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate()
    {
        if(!$this->name){
            $this->errors[] = ['This field is required', 'name'];
        }
        if(!$this->password){
            $this->errors[] = ['This field is required', 'password'];
        }     
        if(!$this->email){
            $this->errors[] = ['This field is required', 'email'];
        }
    }
}
