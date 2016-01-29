<?php

namespace App\model;

use App\DB;
class Gallery
{
    protected $gallery;
    public function __construct()
    {
        $connect = new DB('connect_param.php');
        $gallery = $connect->query('SELECT * FROM gallery',[]);
        $this->gallery = $gallery;
    }
    public function GetBank(){
        return $this->gallery;
    }
    public function Count(){ // вычисляем количество элементов в массиве - для меню
        return count($this->gallery);
    }
}