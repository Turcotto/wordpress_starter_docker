<?php

class SeoContent
{
    public $permalink;
    public $og_description;
    public $og_image;
    public $html_title;
    public $title;

    public function __construct($object) {
        $this->permalink = get_permalink();

        $this->og_description = get_field( 'seo_description', $object );
        $this->og_image = get_field( 'seo_image', $object );

        $this->html_title = get_bloginfo( 'name' );
        $pageTitle = get_the_title();

        $this->title = $pageTitle;

        if ( $pageTitle ) {
            $this->title = $this->title . " • " . $this->html_title;
        }
    }
}