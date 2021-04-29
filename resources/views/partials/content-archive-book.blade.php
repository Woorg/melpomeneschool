@php
  $book_year        = carbon_get_post_meta( get_the_ID(),'book_year' );
  $book_excerpt     = carbon_get_post_meta( get_the_ID(),'book_excerpt' );
  $book_publisher   = carbon_get_post_meta( get_the_ID(),'book_publisher' );
  $book_button_text = carbon_get_post_meta( get_the_ID(),'book_button_text' );
  $book_link        = carbon_get_post_meta( get_the_ID(),'book_link' );
  $book_file        = carbon_get_post_meta( get_the_ID(),'book_file' );
@endphp


<article id="book-0{{ $i }}" class="page__article article article_with_image article_archive_book">
    <div class="article__col">
        <div class="article__image">
            {!! the_post_thumbnail(get_the_ID(), 'full') !!}
        </div>
    </div>
    <div class="article__col">
        <h2 class="article__title">
          {!! get_the_title() !!}
        </h2>

        <h2 class="article__year">
          {{ $book_year }}
        </h2>

        @if ( $book_excerpt )
        <div class="article__excerpt">
            {!! wpautop( $book_excerpt, true ) !!}
        </div>
        @endif

        @if ( $book_publisher )
        <div class="article__publisher">
          {!! wpautop( $book_publisher ) !!}
        </div>
        @endif

        @if ( $book_link )
          <a class="article__more button" href="{{ esc_url( $book_link ) }}">{{ $book_button_text }}</a>
        @endif

        @if ( $book_file )
          <a class="article__more button" href="{{ esc_url( $book_file ) }}">{{ $book_button_text }}</a>
        @endif





    </div>

</article>
