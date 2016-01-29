<?php
namespace App\model;

//require __DIR__ . '/../DB.php';

use App\DB;
class Main
{
    protected $welcome;
    public function __construct()
    {
        $connect = new DB('connect_param.php');
        $welcome = $connect->query('SELECT * FROM welcome',[]);
        $this->welcome = $welcome;
    }
    public function GetText(){
        return $this->welcome;
    }
}