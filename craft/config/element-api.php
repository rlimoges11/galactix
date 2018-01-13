<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        'systems.json' => [
            'criteria' => ['section' => 'systems'],
            'elementsPerPage' => 10,
            'transformer' => function (EntryModel $entry) {
                return [
                    'title' => $entry->title,
                    'url' => $entry->url,
                    'jsonUrl' => UrlHelper::getUrl("systems/{$entry->slug}.json"),
                ];
            },
            'jsonOptions' => JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES,
        ],
    ]
];