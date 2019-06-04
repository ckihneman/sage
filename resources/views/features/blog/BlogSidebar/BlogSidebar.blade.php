<aside class="BlogSidebar">
  @include('features.blog.Widget.Widget', [
    'title' => 'Recent Arcicles',
    'items' => Archive::getRecents(),
  ])
  @include('features.blog.Widget.Widget', [
    'title' => 'Categories',
    'items' => Archive::getCategories(),
  ])
</aside>
