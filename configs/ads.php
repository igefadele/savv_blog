<?php
return [
    [
        'type'       => 'content',
        'enabled'    => true,
        'repeating'  => true,
        'frequency'  => 4,
        'min_length' => 6,
        'snippet'    => 'snippets/ad-mid-content.html'
    ],
    [
        'type'       => 'footer',
        'enabled'    => true,
        'repeating'  => false,
        'frequency'  => 0, // Not needed for footer
        'min_length' => 1,
        'snippet'    => 'snippets/ad-footer.html'
    ],
    [
        'type'       => 'header',
        'enabled'    => true,
        'repeating'  => false,
        'frequency'  => 0, 
        'min_length' => 1,
        'snippet'    => 'snippets/ad-header.html'
    ]
];