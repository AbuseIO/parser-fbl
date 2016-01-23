<?php

return [
    'parser' => [
        'name'          => 'Fbl',
        'enabled'       => true,
        'report_file'   => false,
        'sender_map'    => [
            //
        ],
        'body_map'      => [
            //
        ],
    ],

    'feeds' => [
        'default' => [
            'class'     => 'SPAM',
            'type'      => 'Abuse',
            'enabled'   => true,
            'fields'    => [
                'Arrival-Date',
                'Authentication-Results',
                'Source-IP',
                '',
            ],
            'filters'    => [
                //
            ],
        ],

    ],
];

