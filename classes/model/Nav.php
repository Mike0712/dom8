<?php

namespace App\model;


class Nav
{
    protected $template;
    protected $adminfile;
    protected $name;

    public function __construct()
    {
        $template = scandir(__DIR__ . '/../../templates/');
        $this->template = $template;

        $admtemplate = scandir(__DIR__ . '/../../admin/templates/');
        $this->adminfile = $admtemplate;
    }

    public function GetMenu()
    {
        foreach ($this->template as $k => $value) {
            $k = $value;
            $temp[$k] = $value;
        }
        $name['Рассписание поездов'] = $temp['shedule.php'];
        $name['Фотогаллерея'] = $temp['gallery.php'];
        $name['Главная'] = $temp['index.php'];

        return $name;
    }
    public function AdmMenu()
    {
        foreach ($this->adminfile as $k => $value) {
            $k = $value;
            $temp[$k] = $value;
        }
        $name['Править рассписание'] = $temp['shed.php'];
        $name['Править галлерею'] = $temp['gal.php'];
        $name['Заглавная'] = $temp['admin.php'];
        return $name;
    }
}