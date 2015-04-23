<?php

/*
 * Описание настроек плагина для интерфейса редактирования в админке
 */
$config['$config_scheme$'] = array(
    'tag_black_list' => array(
        /*
         * тип: integer, string, array, boolean, float
         */
        'type' => 'array',
        /*
         * отображаемое имя параметра, ключ языкового файла
         */
        'name' => 'config.tag_black_list.name',
        /*
         * отображаемое описание параметра, ключ языкового файла
         */
        'description' => 'config.tag_black_list.description',
        /*
         * валидатор (не обязательно)
         */
        'validator' => array(
            /*
             * тип валидатора, существующие типы валидаторов движка:
             * Boolean, Compare, Date, Email, Number, Regexp, Required, String, Tags, Type, Url, Array (специальный валидатор, см. документацию)
             */
            'type' => 'Array',
            /*
             * параметры, которые будут переданы в валидатор
             */
            'params' => array(
                'item_validator' => array(
                    'type' => 'String',
                    'params' => array(
                        'min' => 1,
                        'max' => 50,
                    ),
                ),
                'allowEmpty' => true,
                'min_items' => 0,
                'max_items' => 999,
            ),
        ),
    ),
    'tag_admin_list' => array(
        /*
         * тип: integer, string, array, boolean, float
         */
        'type' => 'array',
        /*
         * отображаемое имя параметра, ключ языкового файла
         */
        'name' => 'config.tag_admin_list.name',
        /*
         * отображаемое описание параметра, ключ языкового файла
         */
        'description' => 'config.tag_admin_list.description',
        /*
         * валидатор (не обязательно)
         */
        'validator' => array(
            /*
             * тип валидатора, существующие типы валидаторов движка:
             * Boolean, Compare, Date, Email, Number, Regexp, Required, String, Tags, Type, Url, Array (специальный валидатор, см. документацию)
             */
            'type' => 'Array',
            /*
             * параметры, которые будут переданы в валидатор
             */
            'params' => array(
                'item_validator' => array(
                    'type' => 'String',
                    'params' => array(
                        'min' => 1,
                        'max' => 50,
                    ),
                ),
                'allowEmpty' => true,
                'min_items' => 0,
                'max_items' => 999,
            ),
        ),
    ),
);

/**
 * Описание разделов для настроек
 * Каждый раздел группирует определенные параметры конфига
 */
$config['$config_sections$'] = array(
    /**
     * Настройки раздела
     */
    array(
        /**
         * Название раздела
         */
        'name' => 'config_sections.one',
        /**
         * Список параметров для отображения в разделе
         */
        'allowed_keys' => array(
            'tag_black_list',
            'tag_admin_list',
        ),
    ),
);

return $config;