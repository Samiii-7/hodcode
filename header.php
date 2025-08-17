<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/817a2dbcfa.js" crossorigin="anonymous"></script>
<link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body <?php body_class("bg-gray-300"); ?>>
    <header class="bg-white border-b-2 border-solid border-gray-200 ">
      <div class="max-w-screen-lg mx-auto flex items-center justify-between">
        <div class="flex items-center gap-6">
          <div class="size-16">
            <?php if (function_exists("the_custom_logo")){
              the_custom_logo();
            }?>
        
          
          </div>
            <a href="#">خانه</a>
            <a href="#">محصولات</a>
            
        </div>
        <div class="flex items-center gap-4">
              <a href="#">ارتباط با ما</a>
              <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
      </div>
    </header>