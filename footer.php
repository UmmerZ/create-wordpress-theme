<nav>
<h2>Footer Navigation</h2>
</nav>
<?php 
wp_nav_menu(
    array(
        'theme_location' => 'Footer Menu'
    ));?>
<footer><h2><?php
wp_footer();
?></h2>
<p>&copy; <?= date('Y'); ?>
<a href="<?php echo site_url(); ?>">
<?php bloginfo( 'title' ); ?>
      </a>
      All Rights Reserved.
    </p></footer>
    <?php
    // Similar to wp_head(), but for footer scripts
    // and output.
    wp_footer();
  ?>