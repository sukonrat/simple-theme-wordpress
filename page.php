
 <?php get_header(); ?>

<div class="main">
   <div class="container">
        <!-- Display post list -->
   <?php if(have_posts()) : ?>
        <!-- Looping the post list -->
   <?php while(have_posts()) : the_post(); ?>
         <article class="post">
         <h3>
           
               <?php the_title(); ?>
         
           </h3>
           
           <?php if(has_post_thumbnail()) : ?>
               <div class="post-thumbnail">
                   <?php the_post_thumbnail(); ?>
               </div>
               <?php endif; ?>
               <!-- Display post details -->
           <?php the_content(); ?>
             
         </article>
       <?php endwhile; ?>
       <?php else: ?>
            <!-- if there is no post, displays message -->
           <?php echo wpautop("Sorry, no posts were found"); ?>
       <?php endif; ?>
   </div>
 </div>

<?php get_footer(); ?>