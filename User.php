<?php

class User{

    protected $id_user;
    protected $name;
    protected $lastName;
    protected $address;
    protected $phone;
    protected $role ;

    function __construct($id_user,$name,$lastName,$address,$phone,$role)
    {
        $this->id_user = $id_user;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->phone = $phone;
        $this->role = $role;
    }



    public function getInfo(){
        echo <<<PRINT
        <p>{$this->name}</p>
        <p>{$this->lastName}</p>
        <p>{$this->address}</p>
        <p>{$this->phone}</p>
        <p>{$this->role}</p>
        <hr>
PRINT;

    }



}

$user1 = new User(0001,'Dima','Ivanov','St.Piterburg, st. Lisucova, 21/3','123-12-34','user');

$user1->getInfo();

$user1 = new User(0002,'Evgeniy','Semenov','Minsk, st. Lenina, 43/1','444-52-44','admin');

$user1->getInfo();

