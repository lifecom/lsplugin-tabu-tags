<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginTabutags extends Plugin
{

    /**
     * Активация плагина
     */
    public function Activate()
    {
        return true;
    }

    /**
     * Инициализация плагина
     */
    public function Init()
    {

    }
}
