<?php get_header(); // Include the header ?>

<div class="px-2 md:px-16 py-6">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1 class="text-[#46178F] text-3xl font-bold my-2"><?php the_title(); ?></h1>
            <span class="text-[#4c248a] font-medium">
                <i class="mr-1 fa-regular fa-clock"></i>
                <?php the_date(); ?>

                <i class="ml-4 mr-1 fa-regular fa-user"></i>
                <?php the_author(); ?>
            </span>

            <div class="my-8">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    else :
        echo '<p>No content found</p>'; // Message if no posts are found
    endif;
    ?>
</div>

<?php get_footer(); ?>
