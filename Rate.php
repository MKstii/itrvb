<?php
class Rate{
    private User $user;
    private int $rate;
    private string $message;

    public function __construct(User $user, int $rate, string $message){
        $this->user = $user;
        $this->rate = $rate;
        $this->message = $message;
    }

    public function getUser(){
        return $this->user;
    }

    public function getRate(){
        return $this->rate;
    }

    public function getMessage(){
        return $this->message;
    }
}