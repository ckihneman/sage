@extends('layouts.app')

@section('content')
  @include('features.library.Billboard.Billboard', ['title' => App::title()])

  <div class="Page">
    <div class="Container">

      <p>
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </p>

      {!! get_search_form(false) !!}

    </div>
  </div>
@endsection
