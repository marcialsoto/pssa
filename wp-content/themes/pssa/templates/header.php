<div id="all-header">
  <header class="super-header">
    <div class="container">
      <h1><a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
    </div>
  </header>
  <header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </header>
</div>
