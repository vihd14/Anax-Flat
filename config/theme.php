<?php
/**
 * Config-file for Anax, theme related settings, return it all as array.
 *
 */
return [

    /**
     * Base view to start render page from.
     */
    "view" => [
        "template" => "default/index",

        "data" => [
            // General
            "htmlClass"     => ["anax-flat"],
            "bodyClass"     => [],
            "lang"          => "sv",
            "charset"       => "utf-8",
            "title_append"  => " | Anax Flat",
            "favicon"       => "img/custom.png",

            // Style and stylesheets
            "stylesheets" => [
                "css/style.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ],
            "styleInline" => null,

            // JavaScript
            "javascripts" => ["js/responsive-menu.js"],
        ],
    ],



    /**
     * Add default views to always include.
     */
    "views" => [
        [
            "region" => "header",
            "template" => "default/image",
            "data" => [
                "class" => "logo-left",
                "src" => "img/left_stamp.png",
                "alt" => "Left-stamp",
            ],
            "sort" => 2
        ],
        [
            "region" => "header",
            "template" => "default/image",
            "data" => [
                "class" => "logo-right",
                "src" => "img/right_stamp.png",
                "alt" => "Right-stamp",
            ],
            "sort" => 2
        ],
        [
            "region" => "header",
            "template" => "default/header",
            "data" => [
                "homeLink"      => "",
                // "siteLogoText"  => "Anax Flat",
                // "siteLogoTextIcon" => "img/favicon/favicon_40x40.png",
                // "siteLogoTextIconAlt" => "Small logo",
                "siteLogo"      => null, //"img/anax.png",
                "siteLogoAlt"   => null, //"Anax Logo",
                "siteTitle"     => null, //"Anax PHP framework",
                "siteSlogan"    => null, //"Reusable modules for web development"
            ],
            "sort" => 2
        ],

        [
            "region" => "profile",
            "template" => "default/navbar-max",
            "data" => [],
            "sort" => -1
        ],

        [
            "region" => "navbar2",
            "template" => "default/navbar",
            "data" => [],
            "sort" => 1
        ],

        [
            "region" => "footer",
            "template" => "default/block",
            "sort" => 1,
            "data" => [
                "class" => "author-byline",
                "contentRoute" => "block/byline",
            ],
        ],

        [
            "region" => "footer",
            "template" => "default/columns",
            "data" => [
                "class"  => "footer-column",
                "columns" => [
                    [
                        "contentRoute" => "block/footer-col-1",
                    ],
                    [
                        "contentRoute" => "block/footer-col-2",
                    ],
                    [
                        "contentRoute" => "block/footer-col-3",
                    ]
                ]
            ],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/block",
            "data" => [
                "class" => "site-footer",
                "contentRoute" => "block/footer",
            ],
            "sort" => 2
        ],
    ],
];
