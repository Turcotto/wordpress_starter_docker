<?php

require_once 'modele/SeoContent.php';

$object = get_queried_object();

$seo_content = new SeoContent($object);

wp_head();
?>
<!doctype html>
<html class="" <?php language_attributes(); ?> lang="ca-fr">
<head>
    <title><?= $seo_content->html_title ?></title>

    <meta name="description" content="<?= $seo_content->og_description ?>"/>

    <meta property="og:title" content="<?= $seo_content->title ?>"/>

    <meta property="og:type" content="website"/>

    <meta property="og:url" content="<?= $seo_content->permalink ?>"/>

    <meta property="og:site_name" content="<?= $seo_content->html_title ?>"/>

    <meta property="og:description" content="<?= $seo_content->og_description ?>"/>

    <?php if ($seo_content->og_image): ?>
        <meta property="og:image" content="<?= $seo_content->og_image['url'] ?>"/>
    <?php endif; ?>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/site.webmanifest">
    <link href="<?= get_template_directory_uri() ?>/assets/css/output.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=TODO"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'TODO');
    </script>
    <?php wp_head(); ?>
</head>
<header class="container mx-auto" >

</header>
<main class="bg-white-bg">
