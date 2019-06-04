@include('features.library.Billboard.Billboard', ['title' => App::title()])

<div class="Container Container--lg  Page Page--sidebar">

  <div class="Page-content">
    @while (have_posts()) @php the_post() @endphp
      @include('features.blog.ArchiveItem.ArchiveItem', Singular::archiveItem())
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>

  <div class="Page-sidebar">
    @include('features.blog.BlogSidebar.BlogSidebar')
  </div>
</div>
