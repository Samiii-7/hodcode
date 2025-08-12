<?php get_header()?>
  <div id="page" class="site">
    <main id="main" class="site-main">
      <div class="max-w-screen-lg mx-auto sm:px-6">
        <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            the_title( '<h2>', '</h2>' );
            the_content();
          }
        } else {
          echo '<p>No content found.</p>';
        }
        ?>
        <div class="flex flex-row justify-start align-center mt-6 mr-4">
          <a href="" class="w-34 h-8 bg-blue-500 text-white rounded-2xl text-center"> همه محصولات </a>
          <a href="" class="w-20 h-8 bg-white text-gray-500 border border-gray-500 border-solid rounded-2xl text-center mr-4 ml-2"> دوربین </a>
          <a href="" class="w-30 h-8 bg-white text-gray-500 border border-gray-500 border-solid rounded-2xl text-center mx-2"> کنسول بازی </a>
          <a href="" class="w-20 h-8 bg-white text-gray-500 border border-gray-500 border-solid rounded-2xl text-center mx-2"> هدفون </a>
          <a href="" class="w-32 h-8 bg-white text-gray-500 border border-gray-500 border-solid rounded-2xl text-center mx-2"> وسایل گیمینگ </a>
          <a href="" class="w-20 h-8 bg-white text-gray-500 border border-gray-500 border-solid rounded-2xl text-center mx-2"> هدست </a>
        </div>

        <div class="container mx-auto px-4 py-6">
        <div class="flex flex-wrap -mx-2">
    <!--1-->
        <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_4_2025-08-11_16-01-50.jpg" alt="دوربین دیجیتال آکسون مدل AX6062" class="w-full object-cover mb-5">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">دوربین دیجیتال آکسون مدل AX6062</h3>
        <p class="text-gray-500 text-sm mb-2">دوربین</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
    </div>
  </div>
    <!--1-->
        <!--2-->
      <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_3_2025-08-11_16-01-50.jpg" alt="  دوربین دیجیتال کانن مدل EOS 250D" class="w-full object-cover">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">دوربین دیجیتال کانن مدل EOS 250D</h3>
        <p class="text-gray-500 text-sm mb-2">دوربین</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
</div>
  </div>
    <!--2-->
        <!--3-->
    <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_2_2025-08-11_16-01-50.jpg" alt="هدفون بلوتوثی هایلو" class="w-full object-cover mb-2">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">هدفون بلوتوثی هایلو مدل X12023</h3>
        <p class="text-gray-500 text-sm mb-2">هدفون</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
</div>
  </div>
    <!--3-->
      <!--4-->
<div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_1_2025-08-11_16-01-50.jpg" alt="هدست بلوتوثی سونی" class="w-full object-cover">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">هدست بلوتوثی سونی مدل WH-CH720N</h3>
        <p class="text-gray-500 text-sm mb-2">هدفون</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
</div>
  </div>
    <!--4-->
       <!--5-->
   <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_5_2025-08-11_16-01-50.jpg" alt="هدست گیمنگ بلوتوثی سونی" class="w-full object-cover">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">هدست گیمینگ بلوتوثی سونی مدل InZone H9</h3>
        <p class="text-gray-500 text-sm mb-2">هدفون</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
</div>
  </div>
    <!--5-->
           <!--6-->
<div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-6">
    <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
    <div class="w-full bg-white">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/08/photo_6_2025-08-11_16-01-50.jpg" alt="هدست بلوتوثی استریو" class="w-full object-cover mb-3">
    </div>

    <div class="p-4 flex-1 flex flex-col justify-between">
      <div>
        <h3 class="font-semibold text-base mb-1">هدست بلوتوثی استریو سونی مدل SBH54</h3>
        <p class="text-gray-500 text-sm mb-2">هدفون</p>
      </div>

      <div class="mt-4">
        <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-12">۴٪</span>
        <span class="text-sm text-gray-500 line-through">۲۸٬۴۴۰٬۰۰۰</span>
        <span class="text-lg font-semibold text-gray-900">۲۷٬۳۹۹٬۰۰۰ تومان</span>
        
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-300">افزودن به سبد</button>
      <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300"> مشاهده جزئیات</button>
    </div>
</div>
  </div>
<!--6-->
        <div class="mx-auto my-8 flex flex-row justify-center align-center gap-6 ">
          <a href="#" class="w-14 h-9 bg-white text-gray-400 border border-gray-400 border-solid rounded-md text-center"> قبلی </a>
          <a href="#" class="w-10 h-9 bg-blue-500 text-white rounded-md text-center"> ۱ </a>
          <a href="#" class="w-10 h-9 bg-white text-gray-500 border border-gray-500 border-solid rounded-md text-center"> ۲ </a>
          <a href="#" class="w-14 h-9 bg-white text-gray-500 border border-gray-500 border-solid rounded-md text-center"> بعدی </a>
        </div>
 </div>
      
      </div>
    </main>
  </div>

<?php get_footer()?>