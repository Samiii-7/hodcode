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
          the_title('<h2>', '</h2>');
          the_excerpt();
          the_post_thumbnail();
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>

      </div>
    </main>
  </div>

<?php get_footer()?>