<?php

$config = array();

// Запрещённые теги (для всех пользователей)
$config['tabu_tags'] = array(
    'sex',
);

// Запрещённые теги (только обычным пользователям)
$config['admin_tags'] = array(
    'top5',
);

return $config;