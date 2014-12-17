<section id="owl-home" class="owl-carousel owl-theme">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
      'tag' => 'destacado'
    );

    echo slide_query($args);
  ?>
</section>
