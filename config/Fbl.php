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
            'feedbackloop@feedback.bluetie.com',
	    'feedbackloop@fbl.cox.net',
            'feedbackloop@fbl.apps.rackspace.com',
            'feedbackloop@fbl.synacor.com',
	    'feedbackloop@fbl.usa.net',

            '/feedbackloop@bluetiefbl.senderscore.net/',
            '/feedbackloop@coxfbl.senderscore.net/',
            '/feedbackloop@localwebfbl.senderscore.net/',
            '/feedbackloop@rackspacefbl.senderscore.net/',
            '/feedbackloop@synacorfbl.senderscore.net/',
            '/feedbackloop@terrafbl.senderscore.net/',
            '/feedbackloop@usanetfbl.senderscore.net/',
            '/feedbackloop@italianonlinefbl.senderscore.net/',
            '/feedbackloop@telnorfbl.senderscore.net/',
            '/feedbackloop@xs4allfbl.senderscore.net/',
            '/feedbackloop@comcastfbl.senderscore.net/',
            '/feedbackloop@mailru.senderscore.net/',
            '/feedbackloop@yandexfbl.senderscore.net/',

            '/scomp@aol.net/',
            '/feedbackloop@fbl.fastmail.com/',
            '/feedbackloop@fbl.hostedemail.com/',
            '/feedbackloop@fbl-opensrs.app.returnpath.net/',
            '/feedbackloop@feedback.postmaster.rr.com/',
            '/feedbackloop@fbl.zoho.com/',
            '/feedback@arf.mail.yahoo.com/',
        ],
        'body_map'      => [
            //
        ],
        // The aliases covert the body_map address into a more friendly source name
	'aliases'       => [
            '/feedbackloop@feedback.bluetie.com/' 		=> 'BlueTie',
            '/feedbackloop@fbl.cox.net/'			=> 'COX',
            '/feedbackloop@fbl.apps.rackspace.com/'		=> 'Rackspace',
            '/feedbackloop@fbl.synacor.com/'			=> 'Synacor',
            '/feedbackloop@fbl.usa.net/'			=> 'USANET',

            '/feedbackloop@bluetiefbl.senderscore.net/'       => 'BlueTie',
            '/feedbackloop@coxfbl.senderscore.net/'           => 'COX',
            '/feedbackloop@localwebfbl.senderscore.net/'      => 'LocaWeb',
            '/feedbackloop@rackspacefbl.senderscore.net/'     => 'Rackspace',
            '/feedbackloop@synacorfbl.senderscore.net/'      => 'Synacor',
            '/feedbackloop@terrafbl.senderscore.net/'         => 'Terra',
            '/feedbackloop@usanetfbl.senderscore.net/'        => 'USANET',
            '/feedbackloop@italianonlinefbl.senderscore.net/' => 'Italia Online Libero',
            '/feedbackloop@telnorfbl.senderscore.net/'        => 'Telnor',
            '/feedbackloop@xs4allfbl.senderscore.net/'        => 'XS4All',
            '/feedbackloop@comcastfbl.senderscore.net/'       => 'Comcast',
            '/feedbackloop@mailru.senderscore.net/'           => 'Mail RU',
            '/feedbackloop@yandexfbl.senderscore.net/'        => 'Yandex',

            '/scomp@aol.net/'                                 => 'AOL',
            '/feedbackloop@fbl.fastmail.com/'                 => 'FastMail',
            '/feedbackloop@fbl.hostedemail.com/'              => 'OpenSRS',
            '/feedbackloop@fbl-opensrs.app.returnpath.net/'   => 'OpenSRS',
            '/feedbackloop@feedback.postmaster.rr.com/'       => 'Time Warner Cable',
            '/feedbackloop@fbl.zoho.com/'                     => 'ZOHO',
            '/feedback@arf.mail.yahoo.com/'                   => 'Yahoo',
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
