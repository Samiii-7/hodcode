<?php get_header()?>
  <div id="page" class="site">
    <?php
    $terms = get_terms([
      'taxonomy' => 'product_category',
      'hide_empty' => false
    ]);
    // print_r($terms);
    ?>
    <main id="main" class="site-main">
      <div class="max-w-screen-lg mx-auto sm:px-6">

      <?php if (have_posts()) {
        while (have_posts()) {
          the_post();
          // the_title('<h2>', '</h2>');
          // the_excerpt();
          // the_post_thumbnail();
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>

<div class="w-full my-10">
  <div class="w-full mx-auto bg-white rounded-xl overflow-hidden flex flex-col">

    <?php the_post_thumbnail('large', [
      'class' => 'w-full h-auto object-cover'
    ]) ?>

    <div class="p-4 flex-1 flex flex-col justify-between ">
      <div class="flex flex-row">
        <h3 class="text-xl"><?php the_title() ?></h3>
        <?php $price = get_post_meta(get_the_ID(), 'price', true) ?>
        <?php $oldPrice = get_post_meta(get_the_ID(), 'old_price', true) ?>
        <div class="my-4">
          <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-14 mr-80">۴٪</span>
          <span class="text-sm text-gray-500 line-through"><?= number_format($oldPrice) ?></span>
          <span class="text-lg font-semibold text-gray-900"><?= number_format($price) ?>تومان</span>
        </div>
      </div>
      <div class="mt-4">
        <p class="text-justify text-gray-600">
          دوربین کانن EOS 250D یک دوربین همه کاره است که هم در عکاسی و هم در فیلمبرداری خوب عمل می کند. 
          این دوربین دارای حسگر APS-C CMOS با رزولوشن 24/2 مگاپیکسلی است که از پردازشگر 8 DIGIC بهره میبرد که میتواند با کیفیت 4K فیلمبرداری کند بازه ISO این دوربین بین 100 تا 25600 است که به شما امکان عکاسی در شرایط نوری مختلف را می دهد.
          حسگر این دوربین دارای فوکوس خودکار Dual Pixel CMOS AF است و از تشخیص فازی برای فوکوس دقیق تر و سریع تر هم در زمان عکاسی و هم در زمان فیلمبرداری در حالت Live View بهره می برد اما زمانی که از منظره یاب استفاده می کنید و نقطه با سیستم تشخیص فازی برای فوکوس کردن به شما کمک میکنند که از دقت و سرعت بالایی برخوردار هستند. 
          با وجود طراحی کوچک پشت این دوربین صفحه نمایش لمسی بزرگ 3 اینچی دیده میشود که میتواند در تغییر دادن تنظیمات یا تعیین نقطه ی فوکوس کار شما را راحت کند. 
          صفحه نمایش این دوربین قابلیت چرخش دارد و میتوانید برای عکاسی از زوایای بالا یا پایین نیز از آن استفاده کنید. 
          دوربین کانن 2500 EOS دارای سیستم بیسیم Wi-Fi است که میتوانید برای انتقال عکس به موبایل یا پرینتر از آن استفاده کنید همچنین Bluetooth این دوربین به شما اجازه میدهد تا بتوانید با استفاده از برنامه ی مخصوص بر روی موبایل خود دوربین را کنترل کنید
        </p>
      </div>
    </div>

    <div class="p-4 flex gap-3">
      <button class="w-44 flex justify-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-400">
        <i class="fas fa-shopping-cart"></i> افزودن به سبد  
      </button>
    </div>

    <div class="flex flex-col">
      <h1 class="font-semibold text-xl mb-2"> ویژگی‌ها </h1>
      <span class="text-sm text-gray-600 m-4"> نوع حسگر: <span class="text-lg text-black mx-4">CMOS</span></span>
      <span class="text-sm text-gray-600 mx-4 mb-4"> قطع حسگر: <span class="text-lg text-black mx-4"> (کراپ فریم) APS-C/ Crop Frame</span></span>
    </div>

  </div>
</div>
      </div>
    </main>
  </div>

<?php get_footer()?>
