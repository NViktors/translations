<?php

return [

    'ui_translations'           => [

        'languages' => [
            'languages'       => 'Languages',
            'create'          => 'Create',
            'title'           => 'Title',
            'title_localized' => 'Title localized',
            'iso_code'        => 'ISO code',
            'fallback'        => 'Fallback',
            'actions'         => 'Actions',
            'yes'             => 'Yes',
            'no'              => 'No',
            'search'          => 'Search...',
            'edit_language'   => 'Edit language',
            'back_to_list'    => 'Back to list',
            'save'            => 'Save',
            'create_language' => 'Create language',

            'are_you_sure'             => 'Are you sure?',
            'language_will_be_deleted' => 'Language will be deleted',
            'accept'                   => 'Accept',
            'deleted'                  => 'Deleted!',
            'language_deleted'         => 'Language deleted!',

        ],

        'translations' => [
            'all_groups'                      => 'All groups',
            'translations'                    => 'Translations',
            'export_excel'                    => 'Export excel',
            'import_excel'                    => 'Import excel',
            'search'                          => 'Search...',
            'group_key'                       => 'Group, key',
            'provide_translation'             => 'Provide translation',
            'couldnt-import-excel'            => 'Couldnt parse excel file',
            'translations-have-been-imported' => 'Translations have been imported',
        ],

        'partials' => [
            'delete' => 'Delete',
            'edit'   => 'Edit',
        ]

    ],

    // Which view to extend
    'extends'                   => 'layouts.admin',

    // Name of section in extended parent view
    // Where we put our UI
    'section'                   => 'content',

    // In multi-domain pages, we might want to change this
    'languages_primary_key'     => 'iso_code',
    'languages_incrementing'    => false,

    // Null means that key will default to "locale". If you need something else,
    // You can create global function get_locale_iso_key_in_session(): String
    // And set this to "get_locale_iso_key_in_session" and it will be called to get the key.
    // Iternally we use function_exists to check this config option
    'locale_iso_key_in_session' => null,

    // Null means that key will default to "translations". If you need something else,
    // You can create global function get_translations_key_in_cache(): String
    // And set this to "get_translations_key_in_cache" and it will be called to get the key.
    // Iternally we use function_exists to check this config option
    'translations_key_in_cache' => null,

    // Null means that tag will default to "languages". If you need something else,
    // You can create global function get_languages_cache_tag(): String
    // And set this to "get_languages_cache_tag" and it will be called to get the key.
    // Iternally we use function_exists to check this config option
    'languages_cache_tag'       => null,

];