<?php get_header(); ?>

<div id="main" class="px-2 md:px-16">
    <div class="py-8">
        <p class=""><?php bloginfo('description'); ?></p>
    </div>

    <h2 class="my-8 text-2xl text-slate-700 font-medium">Explore articles</h2>

    <?php
    if (have_posts()): ?>

    <?php endif; ?>
    <div class="flex flex-wrap gap-4">
        <?php
        while (have_posts()):?>
            <?php the_post(); ?>
            <div class="p-4 rounded-lg bg-white w-[360px] h-[200px] shadow">
                <div class="font-medium">
                    <h2 class="text-[#4c248a] font-medium text-xl"><?php the_title(); ?></h2>
                    <span class="text-sm text-[#4c248a]">
                        <i class="mr-1 fa-regular fa-user"></i>
                        <?php the_author(); ?>
                    </span>
                </div>

                <p class="my-6 text-sm"><?php the_excerpt(); ?></p>

                <div class="flex justify-end my-2">
                    <a href="<?php the_permalink(); ?>" class="bg-blue-700 text-white rounded font-medium px-2 py-1">
                        Read More...
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
