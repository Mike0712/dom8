<?php

namespace App;


class View
{

    protected $data = [];
    protected $template;

    public function asign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display()
    {

        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        include __DIR__ . '/../templates/widget/head.php';
        include __DIR__ . '/../templates/widget/top.php';

        if (!empty($_GET['page'])) {
            include realpath(__DIR__ . '/../templates') . '/' . $_GET['page'];
        } else {
            include __DIR__ . '/../templates/index.php';
        }
        include __DIR__ . '/../templates/widget/footer.php';
    }

    public function AdminDisplay()
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
            include __DIR__ . '/../admin/templates/widget/head.php';
            include __DIR__ . '/../admin/templates/widget/menu.php';

        if (!empty($_GET['unit'])) {
                include realpath(__DIR__ . '/../admin/templates') . '/' . $_GET['unit'];
                } else {
            include __DIR__ . '/../admin/templates/admin.php';
            }

        }
}