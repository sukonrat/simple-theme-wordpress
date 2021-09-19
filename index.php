
 <?php get_header(); ?>

 <div class="main">
    <div class="container">
         <!-- Display post list -->
    <?php if(have_posts()) : ?>
         <!-- Looping the post list -->
    <?php while(have_posts()) : the_post(); ?>
          <article class="post">
          <h3>
             <a href="<?php the_permalink(); ?>" >
                <?php the_title(); ?>
            </a>
            </h3>
            <div class="meta">
                Created by <?php the_author(); ?> on <?php the_date(); ?>
            </div>
            <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
                <!-- Display post details -->
            <?php the_excerpt(); ?>
                <!-- Displayed read more button -->
            <a class="button" href="<?php the_permalink(); ?>" >
                Read More
            </a>
          </article>
        <?php endwhile; ?>
        <?php else: ?>
             <!-- if there is no post, displays message -->
            <?php echo wpautop("Sorry, no posts were found"); ?>
        <?php endif; ?>
    </div>
  </div>

 <?php get_footer(); ?>