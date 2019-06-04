<div class="Nav">
  <button class="Nav-close" data-plugin="navClose">
    X
  </button>

  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'container' => false,
      'menu_class' => 'Nav-items',
    ]) !!}
  @endif
</div>

<button class="Nav-toggle" data-plugin="navToggle">
  <span class="u-srOnly">Menu</span>
</button>
