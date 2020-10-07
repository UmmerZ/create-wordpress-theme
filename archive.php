<?php get_header(); ?>

<h2>Archive Template:
<?php echo get_the_archive_title(); ?>
</h2>
<?php while(have_posts()) : ?>
<?php the_post();  ?>

<article>
<h3>
<?php get_the_title(); ?>
</h3>

<p>
<strong>Article Published On:</strong>
<time datetime="<?php echo get_the_date(DATE_ATOM); ?>">
<?php echo get_the_date(); // wp finction to get the date when article was published?>
</time>
<p>
<?php the_excerpt(); //outputs the post summary
 ?></p>
 <p>
 <a href="<?php the_permalink(); ?>">Read More</a>
 </p>
</p>
</article>

<?php endwhile ; ?>
<?php get_footer();