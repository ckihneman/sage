<aside class="BlogSidebar Container-sidebar">
  @include('features.library.Widget.Widget', [
    'title' => 'Recent Arcicles',
    'items' => Archive::getRecents(),
  ])
  @include('features.library.Widget.Widget', [
    'title' => 'Categories',
    'items' => Archive::getCategories(),
  ])
</aside>
