<?php
/**
 * Created by PhpStorm.
 * User: Рита
 * Date: 12.04.2017
 * Time: 16:11
 */

use yii\bootstrap\Modal;

Modal::begin([
    'header' => '<h2>Вывели пользователей из таблицы!</h2>',
    'toggleButton' => [
        'tag' => 'button',
        'class' => 'btn btn-lg btn-block btn-info',
        'label' => 'Нижмите здесь!',
    ]
]);

echo 'И организовали подключение к БД.';

Modal::end(); ?>

<ul>
    <?php foreach($users as $user) { ?>
        <li> <?=$user->name?> </li>
    <? } ?>
</ul>


