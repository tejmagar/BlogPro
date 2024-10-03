<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title><?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="px-3 md:px-16 sm:py-4 py-2 bg-[#46178F] text-white">
    <nav class="flex justify-between items-center">
        <a class="font-semibold sm:text-2xl text-sm" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <div class="flex items-center sm:gap-x-4 gap-x-2">
            <form class="sm:mx-6 mx-2" action="" method="get">
                <div class="relative sm:w-full hidden sm:block text-gray-600">
                    <input aria-label="search" type="search" name="search" placeholder="Search article..."
                           class="bg-white h-10 px-5 pr-10 rounded-lg text-sm focus:outline-none">
                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current text-blue-700 cursor-pointer"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px" viewBox="0 0 56.966 56.966" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                    </svg>
                    </button>
                </div>
            </form>
        </div>
    </nav>
</header>