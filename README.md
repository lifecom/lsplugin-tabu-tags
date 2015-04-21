# LS Plugin: Tabu tags
Плагин запрещает публиковать определённые теги всем пользователям. Также можно резервировать определённые теги только для администраторов.

## Настройка
В файле конфига есть 2 массива:
* ``$config['tabu_tags']`` — запрещённые теги (для всех пользователей);
* ``$config['admin_tags']`` — запрещённые теги (для обычных пользователей).