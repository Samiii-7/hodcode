<?php get_header() ?>
<div id="page" class="site">
  <div class="max-w-screen-lg mx-auto gap-4 flex py-3 flex-wrap">
    <?php
    $terms = get_terms([
      'taxonomy' => 'product_category',
      'hide_empty' => false
    ]);
    foreach ($terms as $term) {
    ?>
      <a href="<?= get_term_link($term) ?>" class="bg-white rounded-full border border-gray-300 text-gray-700 px-2 py-1 my-2 hover:bg-gray-300"><?= $term->name ?></a>
    <?php
    }
    ?>
  </div>

  <main id="main" class="site-main">
    <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
      ?>
          <!-- product -->
          <div class="container mx-auto px-4 py-6">
            <div class="flex flex-wrap -mx-2">
              <div class="w-full h-full bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                <?php the_post_thumbnail() ?>
                <div class="px-2 py-4">
                  <h3 class="text-lg"><?php the_title() ?></h3>
                  <?php $terms = get_the_terms(get_the_ID(), 'product_category');
                  if ($terms && isset($terms[0]))
                    echo "<div class='text-gray-400'>" . $terms[0]->name . "</div>";
                  ?>
                  <?php $price = get_post_meta(get_the_ID(), 'price', true) ?>
                  <?php $oldPrice = get_post_meta(get_the_ID(), 'old_price', true) ?>
                  <div class="my-4">
                    <span class="bg-red-600 text-white px-2 py-1 rounded text-xs whitespace-nowrap ml-14">۴٪</span>
                    <span class="text-sm text-gray-500 line-through"><?= number_format($oldPrice) ?></span>
                    <span class="text-lg font-semibold text-gray-900"><?= number_format($price) ?>تومان</span>
                  </div>
                  <div class="p-4 flex gap-3 text-center">
                    <a href="<?php the_permalink() ?>" class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-400">افزودن به سبد</a>
                    <a href="<?php the_permalink() ?>" class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300">مشاهده جزئیات</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- product -->
      <?php
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>
    </div> 
      <div class="max-w-screen-lg mx-auto my-8 flex justify-center items-center gap-6 bg-gray-100 p-4">
        <a href="#" class="w-16 h-10 bg-white text-gray-400 border border-gray-400 rounded-md flex items-center justify-center">قبلی</a>
        <a href="#" class="w-12 h-10 bg-blue-500 text-white rounded-md flex items-center justify-center">۱</a>
        <a href="#" class="w-12 h-10 bg-white text-gray-500 border border-gray-500 rounded-md flex items-center justify-center">۲</a>
        <a href="#" class="w-16 h-10 bg-white text-gray-500 border border-gray-500 rounded-md flex items-center justify-center">بعدی</a>
      </div>


  </main>
</div>
<?php get_footer() ?>
