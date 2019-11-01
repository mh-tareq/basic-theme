<?php get_header() ?>

<!-- Grid -->
<div class="w3-row">

  <!-- Blog entries -->
  <div class="w3-col l8 s12">
    <!-- Blog entry -->
    <?php get_template_part('loop') ?>

  </div>

  <!-- Introduction menu -->
  <div class="w3-col l4">
    <!-- About Card -->
    <div class="w3-card w3-margin w3-margin-top">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/4.jpg" style="width:100%">
      <div class="w3-container w3-white">
        <h4><b>My Name</b></h4>
        <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of
          lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
      </div>
    </div>
    <hr>

    <!-- Posts -->
    <?php get_sidebar() ?>
    <hr>

    <?php get_footer() ?>