@extends('layouts.app')

@section('content')
  @include('features.library.Billboard.Billboard', ['title' => App::title()])

  <div class="Page">
    <div class="Container">

      @if (!have_posts())
        <p>
          {{ __('Sorry, no results were found.', 'sage') }}
        </p>

        {!! get_search_form(false) !!}
      @endif

      @while(have_posts()) @php the_post() @endphp
        @include('features.library.ArchiveItem.ArchiveItem', Singular::archiveItem())
      @endwhile

      {!! get_the_posts_navigation() !!}

    </div>
  </div>
@endsection
