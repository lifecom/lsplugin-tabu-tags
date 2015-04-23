<?php
/**
 * Русский языковой файл плагина
 * Пример ниже соответствует переменной в шаблоне {$aLang.plugin.abcplugin.name}
 */
return array(
    'messages' => array(
        'black_list_tags' => 'Тег(-и) `%%black_list_tags%%` в чёрномо списке.',
        'admin_list_tags' => 'Тег(-и) `%%admin_list_tags%%` может использовать только админ.',
        'black_and_admin_list_tags' => 'Тег(-и) `%%black_list_tags%%` в чёрномо списке, а `%%admin_list_tags%%` может использовать только админ.',
    ),

    'config' => array(
        'tag_black_list' => array(
            'name' => 'Черный список тегов',
            'description' => 'Эти теги никто не может использовать.',
        ),
        'tag_admin_list' => array(
            'name' => 'Админский список тегов',
            'description' => 'Эти теги разрешается использовать только админам.',
        ),
    ),
    'config_sections' => array(
        'one' => 'Списки тегов',
    ),
);