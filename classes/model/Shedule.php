<?php


namespace App\model;


use App\DB;

class Shedule
{
    protected $train;

    public function __construct()
    {
        $connect = new DB('connect_param.php');
        $train = $connect->query('SELECT * FROM train', []);
        $this->train = $train;
    }

    public function GetTrain()
    {
        return $this->train;
    }
}