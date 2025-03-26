<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
    <meta name="viewport" content="">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>
    <header>
       <nav>
              <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
                <li><a href="<?php echo site_url('/cart'); ?>">Cart</a></li>
              </ul>
       </nav>
    </header>