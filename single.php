<?php get_header(); ?>

<article>
    <h2>
      Blog Post (Single):
      <?php the_title(); ?>
    </h2>
    <p>
      <strong>Article Published On:</strong>
      <time datetime="<?php echo get_the_date( DATE_ATOM ); ?>">
        <?php echo get_the_date(); ?>
      </time>
    </p>
    <h3>Post Categories</h3>
    <ul>
      <?php
        // Get an array of category ID numbers for THIS post. 
        $categories = wp_get_post_categories( get_the_id() );
        // Loop through the post categories...
        foreach ( $categories as $catID )
        { // Retrieve the WP_Term object for this ID.
          $category = get_category( $catID );
          // Retrive the current category's URL (link.)
          $categoryURL = get_term_link( $category );
          // Output the formatted list item (LI.)
          ?>
            <li>
              <a href="<?php echo $categoryURL; ?>">
                <?php echo $category->name; // Property from WP_Term ?>
              </a>
            </li>
          <?php
        }
      ?>
    </ul>
    <h3>Post Content</h3>
    <?php the_content(); // Displays post contents. ?>
</article>

<?php get_footer();