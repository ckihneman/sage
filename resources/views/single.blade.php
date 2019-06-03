@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('features.library.Single.Single', Singular::single())
  @endwhile
@endsection
