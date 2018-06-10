<?php
/*
 * We provide a default configuration with known feedback loops. If you are adding one, consider letting us know
 * so we can update the configuration file.
 *
 * Any FBL's which are powered by ReturnPath can be safely added and are known to work (RFC Compliant)
 *
 */
return [
    'parser' => [
        'name'          => 'Fbl',
        'enabled'       => true,
        'report_file'   => false,
        'sender_map'    => [
            '/scomp@aol.net/',
            '/feedbackloop@feedback.bluetie.com/',
            '/feedbackloop@comcastfbl.senderscore.net/',
            '/feedbackloop@fbl.cox.net/',
            '/feedbackloop@fbl.fastmail.com/',
            '/feedbackloop@fbl.hostedemail.com/',
            '/feedbackloop@fbl-opensrs.app.returnpath.net/',
            '/feedbackloop@fbl.apps.rackspace.com/',
            '/feedbackloop@feedback.apps.rackspace.com/',
            '/feedbackloop@feedback.postmaster.rr.com/',
            '/feedbackloop@fbl.synacor.com/',
            '/feedbackloop@fbl.usa.net/',
            '/feedbackloop@fbl.zoho.com/',
            '/feedback@arf.mail.yahoo.com/',
            '/feedbackloop@feedback.terra.com/',
            '/feedbackloop@fbl.italiaonline.net/',
            '/feedbackloop@mailru.senderscore.net/',
            '/feedbackloop@yandexfbl.senderscore.net/',
            '/feedbackloop@fbl-bluetie.app.returnpath.net/',
        ],
        'body_map'      => [
            //
        ],
        // The aliases covert the body_map address into a more friendly source name
        'aliases'       => [
            '/scomp@aol.net/'                               => 'AOL',
            '/feedbackloop@feedback.bluetie.com/'           => 'BlueTie',
            '/feedbackloop@comcastfbl.senderscore.net/'     => 'Comcast',
            '/feedbackloop@fbl.cox.net/'                    => 'COX',
            '/feedbackloop@fbl.fastmail.com/'               => 'FastMail',
            '/feedbackloop@fbl.hostedemail.com/'            => 'OpenSRS',
            '/feedbackloop@fbl-opensrs.app.returnpath.net/' => 'OpenSRS',
            '/feedbackloop@fbl.apps.rackspace.com/'         => 'Rackspace',
            '/feedbackloop@feedback.apps.rackspace.com/'    => 'Rackspace',
            '/feedbackloop@feedback.postmaster.rr.com/'     => 'Time Warner Cable',
            '/feedbackloop@fbl.synacor.com/'                => 'Synacor',
            '/feedbackloop@fbl.usa.net/'                    => 'USANET',
            '/feedbackloop@fbl.zoho.com/'                   => 'ZOHO',
            '/feedback@arf.mail.yahoo.com/'                 => 'Yahoo',
            '/feedbackloop@feedback.terra.com/'             => 'Terra',
            '/feedbackloop@fbl.italiaonline.net/'           => 'Italia Online Libero',
            '/feedbackloop@mailru.senderscore.net/'         => 'Mail RU',
            '/feedbackloop@yandexfbl.senderscore.net/'      => 'Yandex',
            '/feedbackloop@fbl-bluetie.app.returnpath.net/' => 'Bluetie',
        ]
    ],

    'feeds' => [
        'default' => [
            'class'     => 'FEEDBACK_LOOP',
            'type'      => 'INFO',
            'enabled'   => true,
            'fields'    => [
                'Received-Date',
                'Source-IP',
            ],
            'filters'    => [
                'body'
            ],
        ],

    ],
];
