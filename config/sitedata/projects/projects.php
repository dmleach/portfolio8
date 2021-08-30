<?php

return [
    'portfolio' => [
        'title' => 'Portfolio site',
        'description' => [
            'short' => 'My career and projects site, which you might be looking at right now',
            'long' => 'My portfolio site is a showcase for my career and projects, and is itself a learning experience, as it\'s my first time working with Laravel. I\'d like the site to be a good introduction to myself, what I\'ve done in the past, and what I can do today.',
        ],
        'notes' => [
            'Since this is a fairly simple site, I\'ve not had a need to set up a database. The text of the site, however, is not hard coded into the views. Rather, the data for each page comes from config files that contain the text as associative arrays. That\'s giving me some experience playing around with Laravel\'s objects but still letting me keep the site lightweight. ',
            'Oddly, this is the first site I\'ve created that\'s responsive that didn\'t use a pre-made template. Responsiveness is just one of those things I never got the chance to really understand. Now that I see how to do it, I\'m surprised by how simple it is to create two different layouts that work well in tandem.',
        ],
        'technologies' => [
            [ 'technology' => 'PHP', 'version' => '7.4' ],
            [ 'technology' => 'Laravel', 'version' => '7' ],
            [ 'technology' => 'CSS', 'version' => '3' ],
            [ 'technology' => 'Flexbox' ],
            [ 'technology' => 'Responsive web design'],
            [ 'technology' => 'Apache', 'version' => '2.4' ],
            [ 'technology' => 'Ubuntu', 'version' => '20.04' ],
        ],
        'links' => [
            'Github repository' => 'https://github.com/dmleach/portfolio',
            'Kanboard' => '/kanboard/public/board/95d8bcdfc34689d8ac9726bdb89b24bc1429c39c280b73bc871efd73b4d6',
        ]
    ],
    'scroops' => [
        'title' => 'Scroops',
        'description' => [
            'short' => 'Object-oriented code for Screeps, an MMO strategy game for programmers',
        ],
        'technologies' => [
            [ 'technology' => 'Javascript', 'version' => '7.4' ],
            [ 'technology' => 'Node.js', 'version' => '8' ],
        ],
        'links' => [
            'Screeps' => 'https://screeps.com/',
            'Github repository' => 'https://github.com/dmleach/scroops',
        ]
    ],
];
