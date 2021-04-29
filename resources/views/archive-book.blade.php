@extends('layouts.app-inner')
@section('content')

  <div class="page__description">
    @php
      $books_archive_desc = carbon_get_theme_option('books_archive_desc');
      $i = 0;
    @endphp

    {!! wpautop($books_archive_desc) !!}
  </div>

  @while (have_posts()) @php the_post(); $i++; @endphp
    @include('partials.content-archive-book' )
  @endwhile

@endsection
