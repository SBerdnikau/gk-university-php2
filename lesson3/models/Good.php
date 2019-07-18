<?php

namespace App\models;

class Good extends Model
{

    public $id;
    public $address;
    public $name;
    public $price;

    public function getTableName(): string
    {
        return "gallery";
    }
    public function check(){
        $array = [];
        foreach ($this as $key => $value){
            if(!empty($value)){
                $str = "{$key} = '{$value}'";
                $array[] = $str;
            }
        }
        $str = implode(",", $array);
        return $str;
    }
}