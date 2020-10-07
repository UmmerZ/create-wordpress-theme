<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('info') ; ?></title>
    
    <?php
    // this will output any scripts, styles, meta,
    //and more that our theme / plugin need.
    wp_head();
    ?>
</head>
<body>
    <h1><?php bloginfo('title')?></h1>
    <nav>
    <h2><?php bloginfo('title');?>
    Navigation</h2>
    </nav>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'main_menu'
        ));?>
</body>
</html>