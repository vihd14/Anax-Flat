<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text" => t("HEM"),
                "url" => $this->di->get("url")->create("index"),
                "title" => t("Hem"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text" => t("NYHETER"),
                "url" => $this->di->get("url")->create("blogg"),
                "title" => t("Nyheter"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text" => t("TEMAN"),
                "url" => $this->di->get("url")->create("themes"),
                "title" => t("Teman"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("OM FÖRETAGET"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om företaget"),
                "mark-if-parent" => true,
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text" => t("Hem"),
                "url" => $this->di->get("url")->create("index"),
                "title" => t("Hem"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text" => t("Nyheter"),
                "url" => $this->di->get("url")->create("blogg"),
                "title" => t("Nyheter"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text" => t("Teman"),
                "url" => $this->di->get("url")->create("themes"),
                "title" => t("Teman"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om företaget"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om företaget"),
                "mark-if-parent" => true,
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
