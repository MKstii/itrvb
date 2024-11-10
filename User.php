<?php
class User
{
    private string $name;
    private string $email;
    private string $password;
    public Cart $cart;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->cart = new Cart();
    }

    public function changePassword(string $password){
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}