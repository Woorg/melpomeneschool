<section class="my-books">
  <div class="my-books__container container">
    <div class="my-books__text">{!! $text !!}</div>

    @php
      $my_books = new WP_Query([
        'posts_per_page' => -1,
        'post_type'      => 'book',
        'order'          => 'ASC',
        'orderby'        => 'id',
      ]);
    @endphp


    @if ( $my_books->have_posts() )
    <ul class="my-books__grid">
      @while ( $my_books->have_posts() )
        @php
          $my_books->the_post();
          $image_id = get_post_thumbnail_id();
        @endphp
        <li class="my-books__item">
          <div class="my-books__item-w">
            <a class="my-books__link" href="{!! get_the_permalink() !!}">
              <div class="my-books__item-title">{!! get_the_title() !!}</div>
              <div class="my-books__picture">
                {!! the_post_thumbnail( $image_id, 'book_thumb' ) !!}

              </div>
            </a>
          </div>
        </li>
      @endwhile
    </ul>
    @endif

    @php
      wp_reset_postdata();
    @endphp
  </div>
</section>
