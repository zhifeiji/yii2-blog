<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=yii2advanced',
    'username' => 'pi',
    'password' => '123456',
    'charset' => 'utf8',
    'attributes' => [PDO::ATTR_PERSISTENT => TRUE], //长连接
];