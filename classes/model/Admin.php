<?php

namespace App\model;

use App\DB;

class Admin
{
    private $connect;

    public function __construct()
    {
        $connect = new DB('connect_param.php');
        $this->connect = $connect;
    }

    public function ShowField()
    {
        $list = $this->connect->query('SELECT * FROM train', []);
        return $list;
    }

    public function SetField()
    {/*операция добавления*/
        if ($_POST['add'] == 'Добавить запись') {
            $train = $this->connect->query('INSERT INTO train (numtrain,route,timeto,timefrom,followdays)
                                VALUES (:numtrain,:route,:timeto,:timefrom,:followdays)',
                ['numtrain' => $_POST['numtrain'], 'route' => $_POST['route'], 'timeto' => $_POST['timeto'],
                    'timefrom' => $_POST['timefrom'], 'followdays' => $_POST['followdays']]);
            return $train;
        } elseif ($_POST['edit'] == 'Редактировать') { /*Операция Редактирования*/

            $train = $this->connect->query('UPDATE train SET numtrain=:numtrain,route=:route,timeto=:timeto,
            timefrom=:timefrom,followdays=:followdays WHERE train.id=:id',
                ['numtrain' => $_POST['numtrain'], 'route' => $_POST['route'], 'timeto' => $_POST['timeto'],
                    'timefrom' => $_POST['timefrom'], 'followdays' => $_POST['followdays'], 'id' => $_POST['id']]);
            return $train;
        } elseif ($_POST['delete'] == 'Удалить') { /*Операция удаления*/
            $train = $this->connect->execute('DELETE FROM train WHERE train.id =' . $_POST['id']);
            return $train;
        }
    }

    public function AddImg()
    {
        if (isset($_FILES['photo'])) { // Проверяем существование файла
            if (0 == $_FILES['photo']['error']) { // Проверяем чтобы не было ошибки
                $name = __DIR__ . '/../../serv/img/' . $_FILES['photo']['name'];// Положим значение имени файла пользователя в переменную и зазадим конечную директорию
                $res = move_uploaded_file(
                    $_FILES['photo']['tmp_name'],
                    $name
                );
                return $res;
            }
        }
    }

    public function SetPost()
    {
        if (!empty($_FILES['photo'])) {
            $post = $this->connect->query('INSERT INTO gallery (photo)
                                          VALUES (:photo)',
                ['photo' => $_FILES['photo']['name']]);
            return $post;
        }
    }

    public function ShowMain()
    {
        $main = $this->connect->query('SELECT * FROM welcome', []);
        return $main;
    }

    public function MainContent()
    {
        if ($_POST['changemain'] == 'Редактировать главную') {
            $main = $this->connect->query('UPDATE welcome SET Текст = ? WHERE welcome.id=?',
                [$_POST['maintext'], 1]);
            return $main;
        }
    }
}