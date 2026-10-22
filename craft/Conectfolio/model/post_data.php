<?php
// Edit post_tags in each video's array below; enter tags without the # prefix.
$posts = array(
    "1" => array("username" => "Ellie",
        "userid" => 1,
        "user_realname" => "Ellie",
        "user_image" => "billie.jpeg",
        "post_text" => "I dunno the girl in the mirror",
        "post_tags" => array("reflexion", "lmao", "amen"),
        "post_video_file" => "reflections_mask_experiment.mp4",
    ),
    "2" => array("username" => "Eille",
        "userid" => 2,
        "user_realname" => "Eille",
        "user_image" => "ed_sheran.jpeg",
        "post_text" => "I love cat, that why we have this",
        "post_tags" => array("art", "reflexion", 'ghibli'),
        "post_video_file" => "rainy_day.mp4",

    ),
    "3" => array("username" => "Teu",
        "userid" => 2,
        "user_realname" => "Teu",
        "user_image" => "teu.jpg",
        "post_text" => "I wanna swim",
        "post_tags" => array("reflexion", "beach", "kiel"),
        "post_video_file" => "wasser.mp4"
    ),
    "4" => array("username" => "Cuong",
        "userid" => 2,
        "user_realname" => "Cuong",
        "user_image" => "cuong.jpg",
        "post_text" => "i think this is cool",
        "post_tags" => array("reflexion", "concentrarion", "ocean"),
        "post_video_file" => "schiff.mp4"
    ),
    "5" => array("username" => "Lucas",
        "userid" => 1,
        "user_realname" => "Lucas",
        "user_image" => "lucas.jpg",
        "post_text" => "hehehe did i get you?",
        "post_tags" => array("illusion", "reflexion", "sky"),
        "post_video_file" => "sky.mp4"
    ),



);
// Shared demo data for the existing pages.
$siteName = 'Connectfolio';
$siteUrl = './';

$categories = [
    [
        'label' => 'Everything',
        'icon' => 'bi-grid-fill',
        'url' => '#',
    ],
    [
        'label' => 'Photographer',
        'icon' => 'bi-camera',
        'url' => '#',
    ],
    [
        'label' => 'Illustrator',
        'icon' => 'bi-pencil',
        'url' => '#',
    ],
    [
        'label' => 'Crafts',
        'icon' => 'bi-scissors',
        'url' => '#',
    ],
    [
        'label' => 'Fashion',
        'icon' => 'bi-vector-pen',
        'url' => '#',
    ],
    [
        'label' => 'Other',
        'icon' => 'bi-three-dots',
        'url' => '#',
    ],
];

$hero = [
    'img' => './assets/img/heropicture.jpg',
    'subTitle' => 'A COMMUNITY FOR CREATIVE MINDS',
    'title' => 'You are ...',
    'description' => 'Discover work, connect with other creatives and find inspiration, opportunities and challenges.',
];

$portfolioSection = [
    'subtitle' => 'SWIPED',
    'title' => 'Top Portfolios',
    'url' => './discover.php',
    'linkLabel' => 'View all',
];

$users = [
    1 => [
        'id' => 1,
        'name' => 'Anna Müller',
        'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=600&auto=format&fit=crop',
        'role' => 'Photography',
    ],
    2 => [
        'id' => 2,
        'name' => 'Lucas Barios',
        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop',
        'role' => 'Videographer',
    ],
    3 => [
        'id' => 3,
        'name' => 'Emily Wien',
        'avatar' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=600&auto=format&fit=crop',
        'role' => 'Developer',
    ],
    4 => [
        'id' => 4,
        'name' => 'Bella Mocez',
        'avatar' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=600&auto=format&fit=crop',
        'role' => 'Illustrator',
    ],
    5 => [
        'id' => 5,
        'name' => 'Tom Nvidia',
        'avatar' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=600&auto=format&fit=crop',
        'role' => 'Designer',
    ],
    6 => [
        'id' => 6,
        'name' => 'Mara Jensen',
        'avatar' => 'https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?q=80&w=600&auto=format&fit=crop',
        'role' => 'Creator',
    ],
    7 => [
        'id' => 7,
        'name' => 'Tim Schuster',
        'avatar' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=600&auto=format&fit=crop',
        'role' => 'Crafter',
    ],
    8 => [
        'id' => 8,
        'name' => 'Lea Nguyen',
        'avatar' => 'https://images.unsplash.com/photo-1470058869958-2a77ade41c02?q=80&w=600&auto=format&fit=crop',
        'role' => 'Creator',
    ],
];

$portfolios = [
    [
        'id' => 1,
        'userId' => 1,
        'url' => './portfolio.php?user_id=1',
        'cover' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=600&auto=format&fit=crop',
    ],
    [
        'id' => 2,
        'userId' => 2,
        'url' => './portfolio.php?user_id=2',
        'cover' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop',
    ],
    [
        'id' => 3,
        'userId' => 3,
        'url' => './portfolio.php?user_id=3',
        'cover' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=600&auto=format&fit=crop',
    ],
    [
        'id' => 4,
        'userId' => 4,
        'url' => './portfolio.php?user_id=4',
        'cover' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=600&auto=format&fit=crop',
    ],
    [
        'id' => 5,
        'userId' => 5,
        'url' => './portfolio.php?user_id=5',
        'cover' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=600&auto=format&fit=crop',
    ],
];

$challengeEntries = [
    [
        'userId' => 6,
        'thumbnail' => 'https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?q=80&w=600&auto=format&fit=crop',
        'rank' => 1,
    ],
    [
        'userId' => 7,
        'thumbnail' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?q=80&w=600&auto=format&fit=crop',
        'rank' => 2,
    ],
    [
        'userId' => 8,
        'thumbnail' => 'https://images.unsplash.com/photo-1470058869958-2a77ade41c02?q=80&w=600&auto=format&fit=crop',
        'rank' => 3,
    ],
];

$challenge = [
    'last' => [
        'name' => 'Green Paradise',
        'description' => 'Join our latest sustainability-focused creative challenge. Show your best work and win recognition from top agencies.',
        'url' => './challenges.php',
    ],
    'current' => [
        'name' => 'Reflexion',
        'description' => 'Show us your interpretation of "Reflexion" in any creative form. Whether it is a photo, a short film, an illustration or something else. We are excited to see your perspective.',
        'details' => [
            [
                'icon' => 'bi-calendar-event',
                'title' => 'Ends in 12 days',
                'text' => '30 Sep 2026',
            ],
            [
                'icon' => 'bi-award',
                'title' => 'All creative fields',
                'text' => 'Open to all media',
            ],
            [
                'icon' => 'bi-people',
                'title' => 'Featured',
                'text' => 'Winners will be featured on homepage and social channels.',
            ],
        ],
    ],
];

$events = [
    [
        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Event 1',
        'title' => 'Short Film Collaboration Meetup',
        'description' => 'Meet other filmmakers, exchange ideas and find collaborators for new projects.',
        'day' => '12',
        'month' => 'OCT',
        'location' => 'Hamburg',
        'tags' => [
            'Portfolio',
            'Networking',
        ],
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Event 2',
        'title' => '3D & CGI Creators Workshop',
        'description' => 'Explore advanced rendering techniques and portfolio creation strategies.',
        'day' => '18',
        'month' => 'OCT',
        'location' => 'Berlin',
        'tags' => [
            'Workshop',
            '3D Art',
        ],
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Event 3',
        'title' => 'Brand Film Concept Masterclass',
        'description' => 'Learn how to pitch narrative ideas to top design clients effectively.',
        'day' => '25',
        'month' => 'OCT',
        'location' => 'Online',
        'tags' => [
            'Masterclass',
            'Branding',
        ],
    ],
];

$eventsSection = [
    'subtitle' => 'GET INVOLVED',
    'title' => 'Upcoming Events',
    'url' => '#',
    'linkLabel' => 'View all events',
];

$insights = [
    [
        'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Guide Portfolio',
        'title' => 'How to Build a Portfolio That Gets Noticed',
        'description' => 'Essential tips on selecting your best works and framing case studies.',
        'type' => 'GUIDE',
        'url' => '#',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Article Inspiration',
        'title' => 'How & Where to Find Inspiration Daily',
        'description' => 'Methods to overcome creative block and build a curated mood board.',
        'type' => 'ARTICLE',
        'url' => '#',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1500964757637-c85e8a162699?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Tips Color Theory',
        'title' => 'Mastering Color Theory in Web Design',
        'description' => 'Understand psychological responses to palette choices and accessibility.',
        'type' => 'TIPS',
        'url' => '#',
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop',
        'alt' => 'Interview Directors',
        'title' => 'Insights From Top Creative Directors',
        'description' => 'What agency leaders look for when reviewing junior applicant portfolios.',
        'type' => 'INTERVIEW',
        'url' => '#',
    ],
];

$insightsSection = [
    'subtitle' => 'RESOURCES',
    'title' => 'Insights',
    'url' => '#',
    'linkLabel' => 'View all',
];

$discover = [
    'subtitle' => 'SPEED DISCOVER',
    'title' => 'Portfolios for you',
    'cards' => [
        [
            'image' => 'https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?q=80&w=800&auto=format&fit=crop',
            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=120&auto=format&fit=crop',
            'name' => 'Anna Müller',
            'location' => 'Berlin, Germany',
            'bio' => 'Capturing every moment, colors and texture. I am drawn to the small details that make life feel extraordinary.',
            'tags' => [
                'Video',
                'Foto',
            ],
        ],
    ],
];

$gallerySlots = [
    [
        'layout' => 'portrait',
        'images' => [
            [
                'src' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=1000&auto=format&fit=crop',
                'alt' => 'Portfolio item',
            ],
        ],
    ],
    [
        'layout' => 'stacked',
        'images' => [
            [
                'src' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop',
                'alt' => 'Portfolio item top',
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?q=80&w=600&auto=format&fit=crop',
                'alt' => 'Portfolio item bottom',
            ],
        ],
    ],
    [
        'layout' => 'wide',
        'images' => [
            [
                'src' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=1200&auto=format&fit=crop',
                'alt' => 'Portfolio item wide',
            ],
        ],
    ],
    [
        'layout' => 'portrait',
        'images' => [
            [
                'src' => 'https://images.unsplash.com/photo-1509198397868-475647b2a1e5?q=80&w=1000&auto=format&fit=crop',
                'alt' => 'Portfolio item',
            ],
        ],
    ],
    [
        'layout' => 'stacked',
        'images' => [
            [
                'src' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600&auto=format&fit=crop',
                'alt' => 'Portfolio item top',
            ],
            [
                'src' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=600&auto=format&fit=crop',
                'alt' => 'Portfolio item bottom',
            ],
        ],
    ],
];

$profile = [
    'quote' => 'Designing Stuff is my Passion or another cool quote about this person or moto',
    'funFacts' => [
        'likes fruit',
        'is learning programming',
        'another funfact',
    ],
];

$contactFields = [
    [
        'id' => 'firstName',
        'label' => 'First name',
        'type' => 'text',
        'value' => '',
        'placeholder' => '',
    ],
    [
        'id' => 'lastName',
        'label' => 'Last name',
        'type' => 'text',
        'value' => '',
        'placeholder' => '',
    ],
    [
        'id' => 'email',
        'label' => 'Email address',
        'type' => 'email',
        'value' => '',
        'placeholder' => '',
    ],
    [
        'id' => 'message',
        'label' => 'Your message',
        'type' => 'textarea',
        'value' => '',
        'placeholder' => 'Enter your question or message',
    ],
];

$resume = [
    'details' => [
        [
            'icon' => 'bi-clock',
            'title' => 'Updated recently',
            'text' => '28 Sep 2026',
        ],
        [
            'icon' => 'bi-file-earmark-pdf',
            'title' => '',
            'text' => 'PDF format',
        ],
        [
            'icon' => 'bi-layers',
            'title' => '',
            'text' => '3 files included',
        ],
        [
            'icon' => 'bi-briefcase',
            'title' => '',
            'text' => 'Resume, Portfolio, Cover Letter',
        ],
    ],
];

$navigation = [
    ['label' => 'Home', 'url' => './home.php'],
    ['label' => 'Challenges', 'url' => './challenges.php'],
    ['label' => 'Discover', 'url' => './discover.php'],
];

$headerAction = [
    'label' => 'Login',
    'url' => '#',
];

$footerSocials = [
    [
        'label' => 'Facebook',
        'url' => '#',
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/facebook.svg',
    ],
    [
        'label' => 'LinkedIn',
        'url' => '#',
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/linkedin.svg',
    ],
    [
        'label' => 'YouTube',
        'url' => '#',
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/youtube.svg',
    ],
    [
        'label' => 'Instagram',
        'url' => '#',
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/instagram.svg',
    ],
];

$footerGroups = [
    [
        'title' => 'Explore',
        'links' => [
            [
                'label' => 'Home',
                'url' => './index.php',
            ],
            [
                'label' => 'Discover',
                'url' => './discover.php',
            ],
            [
                'label' => 'Challenges',
                'url' => './challenges.php',
            ],
        ],
    ],
    [
        'title' => 'Community',
        'links' => [
            [
                'label' => 'Portfolios',
                'url' => './discover.php',
            ],
            [
                'label' => 'Creators',
                'url' => './discover.php',
            ],
            [
                'label' => 'Events',
                'url' => './index.php#events',
            ],
        ],
    ],
    [
        'title' => 'Support',
        'links' => [
            [
                'label' => 'Help',
                'url' => '#',
            ],
            [
                'label' => 'Contact',
                'url' => './portfolio.php?user_id=1#contact',
            ],
            [
                'label' => 'Impressum',
                'url' => '#',
            ],
        ],
    ],
];



// Each page adds its content to the same header/footer data.
$siteData = [
    'siteName' => $siteName,
    'siteUrl' => $siteUrl,
    'navigation' => $navigation,
    'headerAction' => $headerAction,
    'footerSocials' => $footerSocials,
    'footerGroups' => $footerGroups,
];

$homePageData = array_merge($siteData, [
    'title' => 'Home | ' . $siteName,
    'hero' => $hero,
    'categories' => $categories,
    'portfolioSection' => $portfolioSection,
    'portfolios' => $portfolios,
    'users' => $users,
    'challenge' => $challenge,
    'challengeEntries' => $challengeEntries,
    'events' => $events,
    'eventsSection' => $eventsSection,
    'insights' => $insights,
    'insightsSection' => $insightsSection,
]);

$discoverPageData = array_merge($siteData, [
    'title' => 'Discover | ' . $siteName,
    'hero' => [
        'img' => $hero['img'],
        'subTitle' => 'DISCOVER CREATIVES',
        'title' => 'Find your next inspiration.',
        'description' => 'Swipe through portfolios, discover new talents and creative perspectives from around the world.',
    ],
    'categories' => [],
    'discover' => $discover,
    'portfolios' => $portfolios,
    'users' => $users,
    'portfolioSection' => [
        'subtitle' => $portfolioSection['subtitle'],
        'title' => 'Liked Portfolios',
        'url' => './discover.php',
        'linkLabel' => $portfolioSection['linkLabel'],
    ],
]);

$challengesPageData = array_merge($siteData, [
    'title' => 'Challenges | ' . $siteName,
    'hero' => [
        'img' => $hero['img'],
        'subTitle' => 'CREATIVE CHALLENGES',
        'title' => 'Create. Share. Get Inspired.',
        'description' => 'Join our creative challenges, show your work and connect with a community of creative minds.',
    ],
    'categories' => [],
    'challenge' => $challenge,
    'posts' => $posts,

]);

$projectTitles = [
    'Creative collaboration',
    'Creative portrait session',
    'Short film collaboration',
    'Visual storytelling workshop',
    'Community exhibition',
    'Behind the scenes',
];

$personalPortfolios = [];
foreach ($users as $id => $creator) {
    $collaborations = [];
    foreach ($projectTitles as $index => $projectTitle) {
        $event = $events[$index % count($events)];
        $collaborations[] = [
            'image' => $event['image'],
            'alt' => $projectTitle,
            'title' => $projectTitle,
            'description' => 'A collaborative project with ' . $creator['name'] . ', sharing ideas and creative work.',
            'day' => $event['day'],
            'month' => $event['month'],
            'location' => $event['location'],
            'tags' => [$creator['role'], 'Collaboration'],
        ];
    }
    $personalPortfolios[$id] = [
        'title' => $creator['name'] . ' | Portfolio',
        'hero' => [
            'img' => $creator['avatar'],
            'subTitle' => 'PERSONAL PORTFOLIO · ' . $creator['role'],
            'title' => $creator['name'],
            'description' => $hero['description'],
        ],
        'categories' => [],
        'gallerySlots' => $gallerySlots,
        'events' => $collaborations,
        'eventsSection' => [
            'subtitle' => 'SHARED PROJECTS',
            'title' => 'Collaborations & Other Creators',
            'url' => './discover.php',
            'linkLabel' => 'Find creators',
        ],
        'profile' => [
            'image' => $creator['avatar'],
            'imageAlt' => $creator['name'] . ' profile',
            'greeting' => "HEY I'M " . $creator['name'] . '!',
            'quote' => $profile['quote'],
            'funFacts' => $profile['funFacts'],
            'paragraphs' => [
                'I am ' . $creator['name'] . ', a creative working in ' . $creator['role'] . '.',
                'My work explores the stories behind everyday places and people.',
                'The gallery brings together recent experiments and collaborations. Get in touch to discuss a new project.',
            ],
        ],
        'contact' => [
            'action' => './portfolio.php?user_id=' . $id . '#contact',
            'fields' => $contactFields,
            'socials' => [
                ['label' => 'email:', 'value' => 'creator' . $id . '@example.com'],
                ['label' => 'instagram:', 'value' => '@creator_' . $id],
                ['label' => 'linkedin:', 'value' => 'linkedin.com/in/creator-' . $id],
            ],
        ],
        'resume' => [
            'description' => 'Resume, portfolio and professional documents for ' . $creator['name'] . '.',
            'details' => $resume['details'],
        ],
    ];
}
