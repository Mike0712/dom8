<div class="content">
    <h3>Поезда, следующие через станцию Новосибирск-Главный</h3>
    <br>
<table class="table">
    <tr>
        <th>Номер поезда</th>
        <th>Маршрут</th>
        <th>Прибытие</th>
        <th>Отправление</th>
        <th>Дни следования</th>
    </tr>
    <?php foreach($shedule->GetTrain() as $train) : ?>
        <tr>
            <td><?php echo $train['numtrain'] ?></td>
            <td><?php echo $train['route'] ?></td>
            <td><?php echo $train['timeto'] ?></td>
            <td><?php echo $train['timefrom'] ?></td>
            <td><?php echo $train['followdays'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
 </div>