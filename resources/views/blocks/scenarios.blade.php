<section class="scenarios">
  <div class="scenarios__container container">
    <h2 class="scenarios__title">{{ $title }}</h2>

    @php
      $terms = get_terms( [
        'taxonomy'               => 'category',
        'hide_empty'             => false,
        'order'                  => 'ASC',
        'orderby'                => 'ID',
        'update_term_meta_cache' => true,

      ] );

    @endphp

    @if ($terms)
    <dl class="scenarios__list">

      @foreach ($terms as $term)

      <li class="scenarios__item">

        <dt class="scenarios__term">
          <a class="scenarios__term-link" href="{{ get_term_link( $term->term_id, 'category' ) }}">{{ $term->name }}</a>
        </dt>

        <dd class="scenarios__desc">

          @php
            $scenarios = new WP_Query([
              'posts_per_page' => -1,
              'post_type'      => 'post',
              'cat'            => $term->term_id,
            ]);

          @endphp


          @if ( $scenarios->have_posts() )
          <ul class="scenarios__term-items">
            @while ( $scenarios->have_posts() )
              @php
                $scenarios->the_post();
              @endphp

            <li class="scenarios__term-item" data-aos="fade-right" data-aos-duration="1500">
              <a href="{!! get_the_permalink() !!}" class="scenarios__link">{{ get_the_title() }}</a>
            </li>
            @endwhile

          </ul>
          @endif

          @php
            wp_reset_postdata();
          @endphp

        </dd>

      </li>
      @endforeach

    </dl>
    @endif


  </div>
</section>
