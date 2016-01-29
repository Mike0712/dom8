<?php
require __DIR__ . '/serv/autoload.php';

use App\View;

$view = new View;

$view->asign('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous');
$view->asign('bootstraploc', 'css/bootstrap.css');
$view->asign('bootstraptheme', 'css/bootstrap-theme.css');
$view->asign('style', 'css/style.css');

use App\model\Main;

$view->asign('main', new Main());
use App\model\Gallery;

$view->asign('gall', new Gallery());

use App\model\Shedule;

$view->asign('shedule', new Shedule());

use App\model\Nav;

$view->asign('nav', new Nav());

$view->display();