<section class="FooterBoard">
  <div class="FooterBoard-inner Container">

    @if (has_nav_menu('primary_footer_navigation'))
      <div class="FooterBoard-section">
        <h3 class="FooterBoard-title">
          Navigation
        </h3>
          {!! wp_nav_menu([
            'theme_location' => 'primary_footer_navigation',
            'container' => false,
            'menu_class' => 'FooterBoard-nav',
          ]) !!}
      </div>
    @endif

  </div>
</section>
