<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
  
</head>
<body> 
     <?php wp_head();?>
<div class="header">
    <h1><?php echo get_bloginfo('name')."-". get_bloginfo('description');?></h1>
</div>