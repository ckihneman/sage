@extends('layouts.app')

@section('content')
  @include('features.library.Billboard.Billboard', ['title' => App::title()])

  <div class="Container Container--lg  Library">

    <div class="Library-content">
      @while (have_posts()) @php the_post() @endphp
        @include('features.library.ArchiveItem.ArchiveItem', Singular::archiveItem())
      @endwhile

      {!! get_the_posts_navigation() !!}
    </div>

    <div class="Library-sidebar">
      @include('features.library.BlogSidebar.BlogSidebar')
    </div>
  </div>
@endsection
