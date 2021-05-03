@php
  $book_subtitle    = carbon_get_post_meta( get_the_ID(),'book_subtitle' );
  $book_characters  = carbon_get_post_meta( get_the_ID(),'book_characters' );
  $book_button_text = carbon_get_post_meta( get_the_ID(),'book_button_text' );
  $book_file        = carbon_get_post_meta( get_the_ID(),'book_file' );
  $book_button_text = $book_button_text ? $book_button_text : 'Завантажити сценарій' ;
@endphp

<article @php post_class('article article_single') @endphp>
  <div class="article__image">
      {!! the_post_thumbnail(get_the_ID(), 'full') !!}
  </div>

  <header>
    <h1 class="article__title">{!! get_the_title() !!}</h1>
  </header>

  @if ($book_subtitle)
  <div class="article__subtitle">
    {!! wpautop( $book_subtitle ) !!}
  </div>
  @endif

  @if ( has_excerpt() )
  <div class="article__excerpt">
    {!! wpautop( get_the_excerpt(), false ) !!}
  </div>
  @endif

  <div class="article__characters">
    <div class="article__characters-title">Дійові особи:</div>
    <div class="article__characters-text">{!! wpautop( $book_characters ) !!}</div>
  </div>

  <div class="article__text">
    @php the_content() @endphp
  </div>

  @if ( $book_file )
  <div class="article__download-w">
    <a data-no-swup class="article__download button" href="{!! esc_url( $book_file ) !!}" download>Завантажити сценарій</a>
  </div>
  @endif

</article>
