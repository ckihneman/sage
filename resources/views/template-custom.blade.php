{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('features.library.Page.Page', Singular::page())
  @endwhile
@endsection
