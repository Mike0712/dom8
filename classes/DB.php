<?php

namespace App;



class DB
{
    private $dsn;
    private $dbh;

    public function __construct($path)
    {
        $param = include __DIR__ . '/../serv/security/' . $path; // Получаем параметры соединения из конфига
        $this->dsn = $param['dsn']; // Кладем параметры соединения в защищенное свойство
        $dbh = new \PDO($this->dsn, $param['login'], $param['psw'], $param['opt'] ); // Установка соединения
        $this->dbh = $dbh;
    }

    public function execute(string $sql) // Сюда передается запрос в виде строки
    {
        $sth = $this->dbh->prepare($sql);  // Подготовка запроса
        $sth->execute();                   // Выполнение запроса
    }

    public function query(string $sql, array $data) //
    {
        $sth = $this->dbh->prepare($sql);  // Подготовка запроса
        $sth->execute($data);              // Выполнение запроса
        $cont = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $cont;
    }
}