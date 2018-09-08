<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php
        if( get_post_meta($post->ID, 'meta_title',true)!='' ){
            $title = get_post_meta($post->ID, 'meta_title',true);
        }else{
            $title = bloginfo('name');
        }

        if( get_post_meta($post->ID, 'meta_key',true)!='' ){
            $keywords = get_post_meta($post->ID, 'meta_key',true);

        }else{
            $keywords = '';
        }

        if( get_post_meta($post->ID, 'meta_desc',true)!='' ){
            $description = get_post_meta($post->ID, 'meta_desc',true);

        }else{
            $description = '';
        }
        ?>
        <meta name="keywords" content="<?=$keywords?>" />
        <meta name="description" content="<?=$description?>" />
        <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&amp;subset=cyrillic" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="/css/style.css?v=<?php /*echo date(U); */?>">-->
        <title><?= $title ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <?php get_template_part("modules/content/head"); ?>