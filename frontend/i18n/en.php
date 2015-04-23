<?php
/**
 * English language file for plug-in
 */
return array(
    'messages' => array(
        'black_list_tags' => 'Tag(s) `%%black_list_tags%%` blacklisted.',
        'admin_list_tags' => 'Tag(s) `%%admin_list_tags%%` can only use the admin.',
        'black_and_admin_list_tags' => 'Tag(s) `%%black_list_tags%%` blacklisted, and `%%admin_list_tags%%` can only use the admin.',
    ),

    'config' => array(
        'tag_black_list' => array(
            'name' => 'Black list of tags',
            'description' => 'These tags, no one can use it.',
        ),
        'tag_admin_list' => array(
            'name' => 'Admin\'s list of tags',
            'description' => 'These tags may be used only to administrators.',
        ),
    ),
    'config_sections' => array(
        'one' => 'Tags lists',
    ),
);