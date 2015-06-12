<nav role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="<?= esc_url(home_url('/')); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav right hide-on-med-and-down']);
    endif;
    ?>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav side-nav']);
    endif;
    ?>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
  </div>
</nav>