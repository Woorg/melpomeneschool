@php
  $book_subtitle   = carbon_get_post_meta( get_the_ID(),'book_subtitle' );
  $book_characters = carbon_get_post_meta( get_the_ID(),'book_characters' );
@endphp


<article class="page__article article article_with_image">
    <div class="article__col">
        <div class="article__image">
            {!! the_post_thumbnail(get_the_ID(), 'full') !!}
        </div>
    </div>
    <div class="article__col">
        <h2 class="article__title">
          {!! get_the_title() !!}
        </h2>

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

        <a class="article__more button button_style_second" href="{!! get_the_permalink() !!}">Читати повністю</a>
    </div>

</article>
