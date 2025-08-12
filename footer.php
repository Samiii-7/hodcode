  <?php wp_footer(); ?>
      <footer class="bg-white">
        <div class="max-w-screen-lg mx-auto flex items-center justify-between border-t-2 border-solid border-gray-200">
          <div class="flex items-center gap-6">
            <div class="size-16 flex">
            <?php if (function_exists("the_custom_logo")){
              the_custom_logo();
            }?>
          </div>
          </div>
        <div class="before:content-['©'] text-center">
          کلیه حقوق این سایت برای پارت محفوظ می‌باشد.
        </div>
        <ul class="flex flex-row gap-fixed-md">
            <li><img src="http://localhost/wordpress/wp-content/uploads/2025/08/twitter.png" alt="Twitter logo" class="size-7 mx-2"></li>
            <li><img src="http://localhost/wordpress/wp-content/uploads/2025/08/linkedin.png" alt="Twitter logo" class="size-7 mx-2"></li>
            <li><img src="http://localhost/wordpress/wp-content/uploads/2025/08/facebook.png" alt="Facebook logo" class="size-7 mx-2"></li>
        </ul>
          
        </div>
      </footer>
</body>
</html>