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
}